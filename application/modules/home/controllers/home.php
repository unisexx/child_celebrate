<?php
class Home extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->template->build('index');
	}

	function save($id=false){
		if($_POST){
            $applicant = new Applicant($id);
			$_POST['birthdate'] = Date2DB($_POST['birthdate']);
			
			// รูปประจำตัว
            if($_FILES['image']['name'])
			{
				if($applicant->id){
					$applicant->delete_file($applicant->id,'uploads/applicant','image');
				}
				$_POST['image'] = $applicant->upload($_FILES['image'],'uploads/applicant/');
            }

            // รูปประจำกลุ่ม
            if($_FILES['g_image']['name'])
			{
				if($applicant->id){
					$applicant->delete_file($applicant->id,'uploads/applicant','g_image');
				}
				$_POST['g_image'] = $applicant->upload($_FILES['g_image'],'uploads/applicant/');
			}
			
			$_POST['last_status'] = 'รอการตรวจสอบ';
			$_POST['code'] = generateRandomString();
            $applicant->from_array($_POST);
			$applicant->save();

			// อัพเดท status log
			$status = new Status();
			$_POST['applicant_id'] = $applicant->id;
			$_POST['status_date'] = date("Y-m-d");
			$_POST['status'] = 'รอการตรวจสอบ';
			$status->from_array($_POST);
			$status->save();

            set_notify('success', lang('save_data_complete'));
        }
		// redirect($_POST['referer']);
		redirect('home/success/'.$_POST['code']);
	}

	function success($code=false){
		$applicant = new Applicant();
		$data['rs'] = $applicant->where('code = "'.$code.'"')->get();

		// ส่งเมล์
		$this->send_mail($applicant);

		$this->template->build('success',$data);
	}

	function chkstatus(){
		$applicant = new Applicant();
		if(@$_GET['code']){
			$data['rs'] = $applicant->where('code = "'.$_GET['code'].'"')->get();
		}
		$this->template->build('chkstatus',@$data);
	}

	function send_mail($applicant=false){

	    // ###### PHPMailer ####
		require_once("PHPMailer_v5.1/class.phpmailer.php"); // ประกาศใช้ class phpmailer 
		
		$mail = new PHPMailer();

		$mail->IsSMTP();                                      // set mailer to use SMTP
		$mail->SMTPAuth = true;     // turn on SMTP authentication
		$mail->SMTPSecure = "tls";
		$mail->Host = "smtp.gmail.com";  // specify main and backup server
		$mail->Port = 587;
		$mail->Username = "fdsiakrin@gmail.com";  // SMTP username
		$mail->Password = "K2aP5GY5"; // SMTP password
		$mail->CharSet = "utf-8";

		$mail->From = "myemail@gmail.com";
		$mail->FromName = "กิจกรรมสรรหาและเชิดชูเด็กและเยาวชนดีเด่นแห่งชาติ";
		$mail->AddAddress($applicant->email, "สำนัก...");

		$mail->WordWrap = 50;                                 // set word wrap to 50 characters
		$mail->IsHTML(true);                                  // set email format to HTML

		$mail->Subject = "ระบบบันทึกข้อมูลเรียบร้อยแล้ว";
		$mail->Body    = "ระบบบันทึกข้อมูลเรียบร้อยแล้ว <br>
		<font color='orange'>ท่านจะต้องส่งเอกสารผลงานฉบับสมบูรณ์ให้กับกรมกิจการเด็กและเยาวชน ภายใน 7 วัน คือวันที่ ".DB2Date(date('Y-m-d', strtotime($applicant->created. ' + 7 days')))."</font> 
		<br>
		ท่านสามารถตรวจสอบสถานะได้ที่ URL : <a href='".site_url('home/chkstatus?code='.@$applicant->code)."'>'".site_url('home/chkstatus?code='.@$applicant->code)."</a>  <br>
		รหัสการตรวจสอบของท่าน คือ <font color='red'>".@$applicant->code."</font>";

		// if(!$mail->Send())
		// {
		// 	echo "Message could not be sent. <p>";
		// 	echo "Mailer Error: " . $mail->ErrorInfo;
		// 	exit;
		// }

		// echo "Message has been sent";

	}

}
?>
