<?php
class Nurseries extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function category_form($id=false){
		$data['category'] = new Nursery_category($id);
		
		$data['categories'] = new Nursery_category();
		$data['categories']->order_by('id','desc')->get();
		$this->template->build('admin/category_form',$data);
	}
	
	function category_save($id=false){
		if($_POST){
			$category = new Nursery_category($id);
			$_POST['user_id'] = $this->session->userdata('id');
			$category->from_array($_POST);
			$category->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function category_delete($id=false){
		if($id){
			$nursery = new Nursery_category($id);
			$nursery->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function estimate(){
		$data['nurseries'] = new Nursery();
		if(@$_GET['name'])$data['nurseries']->where("name like '%".$_GET['name']."%'");
		if(@$_GET['province_id'])$data['nurseries']->where('province_id',$_GET['province_id']);
		if(@$_GET['amphur_id'])$data['nurseries']->where("amphur_id = ".$_GET['amphur_id']);
		if(@$_GET['district_id'])$data['nurseries']->where("district_id = ".$_GET['district_id']);
		if(@$_GET['year'])$data['nurseries']->where("year = ".$_GET['year']);
		
		$data['nurseries']->order_by('id','desc')->get_page();
		$this->template->build('admin/child_estimate',$data);
	}
	
	function estimate_form($id=false){
		$data['nursery'] = new Nursery($id);
		$this->template->build('admin/estimate_form',$data);
	}
	
	function get_amphur(){
		if($_POST){
			echo form_dropdown('amphur_id',get_option('id','amphur_name','amphures','where province_id = '.$_POST['province_id'].' order by id asc'),'','','--- เลือกอำเภอ ---');
		}
	}
	
	function get_district(){
		if($_POST){
			echo form_dropdown('district_id',get_option('id','district_name','districts','where amphur_id = '.$_POST['amphur_id'].' order by id asc'),'','','--- เลือกตำบล ---');
		}
	}
	
	function save_status(){
		if($_POST){
			$nursery = new Nursery($id);
			$nursery->from_array($_POST);
			$nursery->save();
		}
	}
	
	function register_save($id=false){
		if($_POST){
			
			if($id == ""){
				$nuchk = new Nursery();
				$nuchk = $nuchk->where('year = '.$_POST['year'].' and name = "'.$_POST['name'].'" and district_id = '.$_POST['district_id'])->get()->result_count();
				if($nuchk > 0){
					set_notify('error', 'ชื่อศูนย์เด็กเล็กนี้มีแล้วค่ะ');
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
			
			$_POST['user_id'] = $this->session->userdata('id');
			//$_POST['area_id'] = login_data('nursery');
			$nursery = new Nursery($id);
			$nursery->from_array($_POST);
			$nursery->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
			redirect('nurseries/admin/nurseries/estimate');
		}
	}
	
}
?>