<?php
class Home extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index(){
        $rs = new Applicant();
        $data['rs'] = $rs->order_by('id','desc')->get_paged();
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
            // $_POST['status'] = 'approve';
            $applicant->from_array($_POST);
            $applicant->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect('/home/admin/home/form/'.@$id);
	}

}
?>
