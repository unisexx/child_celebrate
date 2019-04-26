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

    // เช็กรหัสประจำตัวประชาชน
    public function ajaxcheckidcard($hasEcho = true) {
        // -- 0:ถูกต้อง สามารถนำไปใช้งานได้
        // -- 1:แต่ไม่ครบ 13 หลัก
        // -- 2:รูปแบบรหัสบัตรไม่ถูกต้อง
        // -- 3:มีการใช้งานแล้ว
        $_GET['idcard'] = empty($_GET['idcard'])?'':str_replace('-','',$_GET['idcard']);
        // $_GET['idcard'] = '1201541462234';
        // $_GET['idcard'] = 1140400059671;
        // $_GET['idcard'] = '1160100463682';
        $rs = 0;
        //ไม่ครบ 13 หลัก
        if(!$rs && strlen($_GET['idcard'])<13) { $rs = 1; }
        //รูปแบบรหัสบัตรไม่ถูกต้อง
        if(!$rs) {
            $tmp;
            foreach(range(13,2) as $a => $b) { $tmp[] = ($_GET['idcard'][$a]*$b); }
            $chk = substr('0'.(11-(array_sum($tmp)%11)),-1);
            if($chk!=substr($_GET['idcard'],-1)) { $rs = 2; }
        }
        //มีการใช้งานแล้ว
        // if(
        //     !$rs &&
        //     \App\Models\Personal::where(function($q){
        //         if(!empty($_GET['id'])) { $q->where('id','<>',$_GET['id']); }
        //     })->where('idcard',$_GET['idcard'])->count() > 0
        // ) { $rs = 3; }
        // return type.
        if($hasEcho) { echo $rs; }
        else { return $rs; }
    }

    public function checkDupID(){
        $applicant = new Applicant();
        $applicant->where("id_card = '".$_GET['id_card']."' ")->get();
        
        if($applicant->exists())
        {
            echo 'false';
        }
        else
        {
            echo 'true';
        }
    }

    public function checkDupGName(){
        $applicant = new Applicant();
        $applicant->where("g_name = '".$_GET['g_name']."' ")->get();
        
        if($applicant->exists())
        {
            echo 'false';
        }
        else
        {
            echo 'true';
        }
    }
}
?>
