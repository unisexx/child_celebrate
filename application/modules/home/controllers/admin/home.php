<?php
class Home extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$data['rs'] = new Applicant();
		$data['count'] = new Applicant();

		// ค้นหา
		if(@$_GET['txtsearch']){
			$data['rs'] = $data['rs']->where("(fullname like '%".$_GET['txtsearch']."%' or g_name like '%".$_GET['txtsearch']."%' or id_card like '%".$_GET['txtsearch']."%'  or code like '%".$_GET['txtsearch']."%')");
		}
		if(@$_GET['last_status']){
			$data['rs'] = $data['rs']->where("last_status",$_GET['last_status']);
		}
		if(@$_GET['province_id']){
			$data['rs'] = $data['rs']->where("(province_id = ".$_GET['province_id']." or g_province_id = ".$_GET['province_id'].")");
		}
		if(@$_GET['district_id']){
			$data['rs'] = $data['rs']->where("(district_id = ".$_GET['district_id']." or g_district_id = ".$_GET['district_id'].")");
		}
		if(@$_GET['created']){
			$data['rs'] = $data['rs']->where("created like '%".Date2DB($_GET['created'])."%'");
		}

		$data['rs'] = $data['rs']->order_by('id','desc')->get_paged(20);
		
		// echo $this->db->last_query();
        $this->template->build('admin/index',$data);
    }
    
    function form($id=false){
    	$data['rs'] = new Applicant($id);
        $this->template->build('admin/form',$data);
    }

	function save($id=false){
		if($_POST){
            $applicant = new Applicant($id);
			$_POST['birthdate'] = Date2DB($_POST['birthdate']);
			$_POST['last_status'] = $_POST['status'];

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
			
            $applicant->from_array($_POST);
            $applicant->save();
			
			// save สถานะ
			$status = new Status();
			$_POST['applicant_id'] = $id;
			$_POST['status_date'] = Date2DB($_POST['status_date']);
			$_POST['user_id'] = user()->id;
            $status->from_array($_POST);
			$status->save();

			// ส่งเมล์
			$this->send_mail($applicant);

			set_notify('success', lang('save_data_complete'));
        }
		redirect('home/admin/home/form/'.@$id);
		// redirect('home/admin/home');
    }
    
    function delete($id=FALSE)
	{
		if($id)
		{
			$applicant = new Applicant($id);
			$applicant->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect('home/admin/home');
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

		$mail->Subject = "ผลการพิจารณาสถานะ";
		$mail->Body    = "รหัสตรวจสอบ : ".$applicant->code."<br>สถานะ : ".$applicant->last_status."<br>วันที่ลงสถานะ : ".DB2Date($applicant->updated);

		// if(!$mail->Send())
		// {
		// 	echo "Message could not be sent. <p>";
		// 	echo "Mailer Error: " . $mail->ErrorInfo;
		// 	exit;
		// }

		echo "Message has been sent";

	}

}
?>
