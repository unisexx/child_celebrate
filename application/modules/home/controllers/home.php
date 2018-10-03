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
            $_POST['status'] = 'รอการตรวจสอบ';
            $applicant->from_array($_POST);
            $applicant->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_POST['referer']);
	}

}
?>
