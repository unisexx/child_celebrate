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
        redirect($_POST['referer']);
	}

	// เลือกจังหวัด select อำเภอ
    public function ajaxselectdistrict()
    {
		echo form_dropdown('district_id', get_option('id','name','st_districts where st_province_id = '.@$_GET['province_id'].' order by name asc'), "",'class="selectpicker district" data-live-search="true" data-size="7" title="เลือกอำเภอ"');
    }

	// เลือกอำเภอ หา ตำบล
    public function ajaxselectsubdistrict()
    {
        echo form_dropdown('subdistrict_id', get_option('id','name','st_subdistricts where st_province_id = '.@$_GET['province_id'].' and st_district_id = '.@$_GET['district_id'].' order by name asc'), "",'class="selectpicker" data-live-search="true" data-size="7" title="เลือกตำบล"');
    }

}
?>
