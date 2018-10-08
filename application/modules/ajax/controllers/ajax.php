<?php
Class Ajax extends Public_Controller
{

	// เลือกจังหวัด select อำเภอ
    public function ajaxselectdistrict()
    {
		echo form_dropdown($_GET['district_name'], get_option('id','name','st_districts where st_province_id = '.@$_GET['province_id'].' order by name asc'), "",'class="selectpicker district" data-live-search="true" data-size="7" title="เลือกอำเภอ"');
    }

	// เลือกอำเภอ หา ตำบล
    public function ajaxselectsubdistrict()
    {
        echo form_dropdown($_GET['subdistrict_name'], get_option('id','name','st_subdistricts where st_province_id = '.@$_GET['province_id'].' and st_district_id = '.@$_GET['district_id'].' order by name asc'), "",'class="selectpicker" data-live-search="true" data-size="7" title="เลือกตำบล"');
    }

}
?>
