<?php
class Home extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$rs = new Applicant();
		$data['count'] = $rs;
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
            set_notify('success', lang('save_data_complete'));
        }
		// redirect('home/admin/home/form/'.@$id);
		redirect('home/admin/home');
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

}
?>
