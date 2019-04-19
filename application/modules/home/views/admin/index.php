<h3>ข้อมูลลงทะเบียนแบบเสนอผลงาน</h3>
<div id="search">
    <div id="searchBox">
        <form class="form-inline">
            <input name="txtsearch" type="text" class="form-control" placeholder="ชื่อ / เลขบัตรผู้สมัคร / รหัสตรวจสอบ" style="width:400px;" value="<?php echo @$_GET['txtsearch']?>">
            <select name="last_status" class="form-control" style="width:auto">
                <option value="">-- สถานะ --</option>
                <option value="รอการตรวจสอบ" <?php echo @$_GET['last_status'] == 'รอการตรวจสอบ' ? 'selected=selected' : '';?>>รอการตรวจสอบ</option>
                <option value="ผ่านการตรวจสอบ" <?php echo @$_GET['last_status'] == 'ผ่านการตรวจสอบ' ? 'selected=selected' : '';?>>ผ่านการตรวจสอบ</option>
                <option value="ไม่ผ่านการตรวจสอบ" <?php echo @$_GET['last_status'] == 'ไม่ผ่านการตรวจสอบ' ? 'selected=selected' : '';?>>ไม่ผ่านการตรวจสอบ</option>
                <option value="รอเอกสาร" <?php echo @$_GET['last_status'] == 'รอเอกสาร' ? 'selected=selected' : '';?>>รอเอกสาร</option>
            </select>
            
            <?php echo form_dropdown('province_id', get_option('id','name','st_provinces order by name asc'), @$_GET['province_id'],'class="selectpicker province" data-live-search="true" data-size="7" title="-- จังหวัด --" style="width:auto"','ทุกจังหวัด');?>

            <span class="spanDistrict">
            <?php if(@$_GET['province_id']):?>
                <?php echo form_dropdown('district_id', get_option('id','name','st_districts where st_province_id = '.$_GET['province_id'].' and status = 1 order by name asc'), @$_GET['district_id'],'class="selectpicker" data-live-search="true" data-size="7" title="-- อำเภอ --" style="width:auto"');?>
            <?php else:?>
                <select name="district_id" class="selectpicker" data-live-search="true" title="-- อำเภอ --" disabled="disabled" style="width:auto">
                    <option>-- อำเภอ --</option>
                </select>
            <?php endif;?>
            </span>

            วันที่ลงทะเบียน
            <input name="created" type="text" class="datepicker form-control fdate" value="<?php echo @$_GET['created']?>" style="width:120px;" />
            <button type="submit" class="btn btn-info"><img src="themes/admin/images/search.png" width="16" height="16" />ค้นหา</button>
        </form>


    </div>
</div>
<!--<div id="btnBox">
  <input type="button" title="เพิ่มหลักสูตร" value="เพิ่มหลักสูตร" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-warning vtip" />
</div>-->

<?php
    $txtsearch = 'txtsearch='.@$_GET['txtsearch'];
    $province_id = 'province_id='.@$_GET['province_id'];
    $district_id = 'district_id='.@$_GET['district_id'];
    $created = 'created='.@$_GET['created'];
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]?".$txtsearch.'&'.$province_id.'&'.$district_id.'&'.$created;

    // $count = $count;
    $condition = " 1=1 ";
    if(@$_GET['txtsearch']){
        $condition .= " and (fullname like '%".$_GET['txtsearch']."%' or g_name like '%".$_GET['txtsearch']."%' or id_card like '%".$_GET['txtsearch']."%'  or code like '%".$_GET['txtsearch']."%') ";
    }
    if(@$_GET['province_id']){
        $condition .= " and (province_id = ".$_GET['province_id']." or g_province_id = ".$_GET['province_id'].") ";
    }
    if(@$_GET['district_id']){
        $condition .= " and (district_id = ".$_GET['district_id']." or g_district_id = ".$_GET['district_id'].") ";
    }
    if(@$_GET['created']){
        $condition .= " and created like '%".Date2DB($_GET['created'])."%' ";
    }
    
    // echo $condition;
    $count1 = $this->db->query("SELECT * FROM applicants WHERE ".$condition." and last_status = 'รอการตรวจสอบ'")->num_rows();
    $count2 = $this->db->query("SELECT * FROM applicants WHERE ".$condition." and last_status = 'ผ่านการตรวจสอบ'")->num_rows();
    $count3 = $this->db->query("SELECT * FROM applicants WHERE ".$condition." and last_status = 'ไม่ผ่านการตรวจสอบ'")->num_rows();
    $count4 = $this->db->query("SELECT * FROM applicants WHERE ".$condition." and last_status = 'รอเอกสาร'")->num_rows();
?>
<div id="status">
    <span><img src="themes/admin/images/ico_pedding.png" width="24" height="24" /> <a href="<?php echo $actual_link.'&last_status=รอการตรวจสอบ'?>">รอการตรวจสอบ (<?php echo @$count1?>)</a></span>
    <span><img src="themes/admin/images/ico_passed.png" width="24" height="24" /> <a href="<?php echo $actual_link.'&last_status=ผ่านการตรวจสอบ'?>">ผ่านการตรวจสอบ (<?php echo @$count2?>)</a></span>
    <span><img src="themes/admin/images/ico_reject.png" width="24" height="24" /> <a href="<?php echo $actual_link.'&last_status=ไม่ผ่านการตรวจสอบ'?>">ไม่ผ่าน (<?php echo @$count3?>)</a></span>
    <span><img src="themes/admin/images/document.png" width="24" height="24" /> <a href="<?php echo $actual_link.'&last_status=รอเอกสาร'?>">รอเอกสาร (<?php echo @$count4?>)</a></span>
</div>


<?php echo $rs->pagination()?>

<table class="tblist">
    <tr>
        <th>ลำดับ</th>
        <th>ชื่อผู้สมัคร</th>
        <th>วันเวลาที่ลงทะเบียน</th>
        <th style="width:35%">ที่อยู่</th>
        <th class="txtCen">สถานะ</th>
        <th>จัดการ</th>
    </tr>
    <?php foreach($rs as $key=>$row):?>
    <tr>
        <td>
            <?$_GET['page'] = (@$_GET['page'] == "")?"1":@$_GET['page'];?>
            <?=($key+1)+(20 * (@$_GET['page'] - 1));?>
        </td>
        <td>
            <?php if($row->type == 1 || $row->type == 2):?>

                <?php echo $row->fullname;?><br />
                <?php echo $row->id_card;?>

            <?php elseif(($row->type == 3 || $row->type == 4)):?>

                <?php echo $row->g_name;?>

            <?php endif;?>
        </td>
        <td><?php echo DB2Date($row->created) ?></td>
        <td>
            <?php if($row->type == 1 || $row->type == 2):?>

                <?php echo $row->address ?>
                ต. <?php echo empty($row->subdistrict_id)?'-':$row->subdistrict->name; ?>
                อ. <?php echo empty($row->district_id)?'-':$row->district->name; ?>
                จ. <?php echo empty($row->province_id)?'-':$row->province->name; ?>
                <?php echo $row->postcode ?>

            <?php elseif(($row->type == 3 || $row->type == 4)):?>

                <?php echo $row->g_address ?>
                ต. <?php echo empty($row->g_subdistrict_id)?'-':get_subdistrict_name($row->g_subdistrict_id); ?>
                อ. <?php echo empty($row->g_district_id)?'-':get_district_name($row->g_district_id); ?>
                จ. <?php echo empty($row->g_province_id)?'-':get_province_name($row->g_province_id); ?>
                <?php echo $row->g_postcode ?>

            <?php endif;?>
        </td>
        <td class="txtCen">
            <?php if($row->last_status == 'รอการตรวจสอบ') :?>
                <img src="themes/admin/images/ico_pedding.png" width="32" height="32" class="vtip" title="รอการตรวจสอบ" />
            <?php elseif($row->last_status == 'ผ่านการตรวจสอบ'):?>
                <img src="themes/admin/images/ico_passed.png" width="32" height="32" class="vtip" title="ผ่านการตรวจสอบ">
            <?php elseif($row->last_status == 'ไม่ผ่านการตรวจสอบ'):?>
                <img src="themes/admin/images/ico_reject.png" width="32" height="32" class="vtip" title="ไม่ผ่าน">
            <?php elseif($row->last_status == 'รอเอกสาร'):?>
                <img src="themes/admin/images/document.png" width="32" height="32" class="vtip" title="รอเอกสาร">
            <?php endif;?>
        </td>
        <td>
            <a href="home/admin/home/form/<?php echo $row->id?>">
                <img src="themes/admin/images/edit.png" width="24" height="24" class="vtip" title="แก้ไขรายการนี้" />
            </a> 
            <a href="home/admin/home/delete/<?php echo $row->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">
                <img src="themes/admin/images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้" />
            </a>
        </td>
    </tr>
    <?php endforeach;?>

</table>

<?php echo $rs->pagination()?>


<script>
$(document).ready(function(){

  // select จังหวัด หา อำเภอ
  $(document).on('change', "select[name=province_id]", function() {
    var province_id = $(this).val();
    var district_name = 'district_id';
    var district_element = $('.spanDistrict');
    AjaxSelectDistrict(province_id,district_name,district_element);

    // disable all child Element
    $('.spanSubdistrict').find('select').val('เลือกตำบล');
    $('.spanSubdistrict').find('select').prop('disabled', true);
    $('.spanSubdistrict').find('select').selectpicker('refresh');
  });

  // select อำเภอ หา ตำบล
  $(document).on('change', "select[name=district_id]", function() {
    var province_id = $('select[name=province_id]').val();
    var district_id = $(this).val();
    var subdistrict_name = 'subdistrict_id';
    var subdistrict_element = $('.spanSubdistrict');
    AjaxSelectSubdistrict(province_id,district_id,subdistrict_name,subdistrict_element);
  });

});


// เลือกจังหวัด แสดงอำเภอ
function AjaxSelectDistrict($province_id,$district_name,$district_element){
  if($province_id == ""){
    $district_element.find('select').val('').attr("disabled", true);
    $district_element.find('select').selectpicker('refresh');
  }else{
    $.get('ajax/ajaxselectdistrict',{
      'province_id' : $province_id,
      'district_name' : $district_name,
    },function(data){
      $district_element.html(data);
      $district_element.find('select option:contains("เลือกอำเภอ")').text('+ เลือกอำเภอ +');
      $district_element.find('select').selectpicker('refresh');
    });
  }
}

// เลือกอำเภอ แสดงตำบล
function AjaxSelectSubdistrict($province_id,$district_id,$sudistrict_name,$subdistrict_element){
  if($district_id == ""){
    $subdistrict_element.find('select').val('').attr("disabled", true);
    $subdistrict_element.find('select').selectpicker('refresh');
  }else{
    $.get('ajax/ajaxselectsubdistrict',{
      'province_id' : $province_id,
      'district_id' :  $district_id,
      'subdistrict_name' : $sudistrict_name,
    },function(data){
        $subdistrict_element.html(data);
        $subdistrict_element.find('select option:contains("เลือกตำบล")').text('+ เลือกตำบล +');
        $subdistrict_element.find('select').selectpicker('refresh');
    });
  }
}
</script>