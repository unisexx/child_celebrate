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
			
            $_POST['status'] = 'รอการตรวจสอบ';
            $applicant->from_array($_POST);
            $applicant->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_POST['referer']);
	}

}
?>
