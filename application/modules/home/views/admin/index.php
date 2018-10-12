<h3>ข้อมูลลงทะเบียนแบบเสนอผลงาน</h3>
<div id="search">
    <div id="searchBox">
        <form class="form-inline">
            <input name="txtsearch" type="text" class="form-control" placeholder="ชื่อ/เลขบัตรประชาชน ผู้ลงทะเบียน / รหัสหรือชื่อหลักสูตร" style="width:400px;">
            <select name="status" class="form-control" style="width:auto">
                <option value="">-- สถานะ --</option>
                <option value="รอการตรวจสอบ" <?php echo @$_GET['status'] == 'รอการตรวจสอบ' ? 'selected=selected' : '';?>>รอการตรวจสอบ</option>
                <option value="ผ่านการตรวจสอบ" <?php echo @$_GET['status'] == 'ผ่านการตรวจสอบ' ? 'selected=selected' : '';?>>ผ่านการตรวจสอบ</option>
                <option value="ไม่ผ่านการตรวจสอบ" <?php echo @$_GET['status'] == 'ไม่ผ่านการตรวจสอบ' ? 'selected=selected' : '';?>>ไม่ผ่านการตรวจสอบ</option>
            </select>
            
            <?php echo form_dropdown('province_id', get_option('id','name','st_provinces order by name asc'), @$_GET['province_id'],'class="selectpicker province" data-live-search="true" data-size="7" title="-- จังหวัด --" style="width:auto"');?>

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
            <input name="created" type="text" class="datepicker form-control fdate" value="" style="width:120px;" />
            <button type="submit" class="btn btn-info"><img src="themes/admin/images/search.png" width="16" height="16" />ค้นหา</button>
        </form>


    </div>
</div>
<!--<div id="btnBox">
  <input type="button" title="เพิ่มหลักสูตร" value="เพิ่มหลักสูตร" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-warning vtip" />
</div>-->

<div id="status">
    <span><img src="themes/admin/images/ico_pedding.png" width="24" height="24" /> <a href="#">รอการตรวจสอบ (<?php echo $count->where("status = 'รอการตรวจสอบ'")->count()?>)</a></span>
    <span><img src="themes/admin/images/ico_passed.png" width="24" height="24" /> <a href="#">ผ่านการตรวจสอบ (<?php echo $count->where("status = 'ผ่านการตรวจสอบ'")->count()?>)</a></span>
    <span><img src="themes/admin/images/ico_reject.png" width="24" height="24" /> <a href="#">ไม่ผ่าน (<?php echo $count->where("status = 'ไม่ผ่านการตรวจสอบ'")->count()?>)</a></span>
</div>

<!-- <div class="paginationTG">
    <ul>
        <li style="margin-right:10px;">หน้าที่</li>
        <li class="currentpage">1</li>
        <li><a href=''>2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li><a href="">5</a></li>
        <li><a href="">6</a></li>
        <li><a href="">7</a></li> . . . <li><a href="">19</a></li>
        <li><a href="">20</a></li>
        <li><a href="">21</a></li>
    </ul>
</div> -->

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
            <?php if($row->status == 'รอการตรวจสอบ') :?>
                <img src="themes/admin/images/ico_pedding.png" width="32" height="32" class="vtip" title="รอการตรวจสอบ" />
            <?php elseif($row->status == 'ผ่านการตรวจสอบ'):?>
                <img src="themes/admin/images/ico_passed.png" width="32" height="32" class="vtip" title="ผ่านการตรวจสอบ">
            <?php elseif($row->status == 'ไม่ผ่านการตรวจสอบ'):?>
                <img src="themes/admin/images/ico_reject.png" width="32" height="32" class="vtip" title="ไม่ผ่าน">
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

    <!-- <tr>
        <td>1</td>
        <td>นายธันยกร หลีสันติพงศ์<br />
            3-1007-00134-08-1</td>
        <td>01/07/2560<br />
            14.50 น.</td>
        <td>52 หมู่ 6 ต . จรเข้เผือก อ. ด่านมะขามเตี้ย จ . กาญจนบุรี 71260</td>
        <td class="txtCen"><img src="themes/admin/images/ico_pedding.png" width="32" height="32" class="vtip" title="รอการตรวจสอบ" /></td>
        <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="themes/admin/images/edit.png" width="24" height="24"
                    class="vtip" title="แก้ไขรายการนี้" /></a> <img src="themes/admin/images/remove.png" width="32" height="32"
                class="vtip" title="ลบรายการนี้" /></td>
    </tr>
    <tr class="odd">
        <td>2</td>
        <td>นางสาวประภาศรี ทองกิ่งแก้ว<br />
            3-3071-10141-09-2</td>
        <td>01/07/2560<br />
            15.20 น.</td>
        <td>1296/105-7 ถ.กรุงเทพ-นนทบุรี เขต บางซื่อ กทม. 10800</td>
        <td class="txtCen"><img src="themes/admin/images/ico_passed.png" width="32" height="32" class="vtip" title="ผ่านการตรวจสอบ" /></td>
        <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="themes/admin/images/edit.png" width="24" height="24"
                    class="vtip" title="แก้ไขรายการนี้" /></a> <img src="themes/admin/images/remove.png" width="32" height="32"
                class="vtip" title="ลบรายการนี้" /></td>
    </tr>
    <tr>
        <td>3</td>
        <td>นางสาววันเพ็ญ แซ่เอีย<br />
            3-1017-01343-81-7</td>
        <td>05/07/2560<br />
            11.10 น.</td>
        <td>924. ถ.พระราม9. แขวงบางกะปิ เขตห้วยขวาง กทม.10310</td>
        <td class="txtCen"><img src="themes/admin/images/ico_reject.png" width="32" height="32" class="vtip" title="ไม่ผ่าน" /></td>
        <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="themes/admin/images/edit.png" width="24" height="24"
                    class="vtip" title="แก้ไขรายการนี้" /></a> <img src="themes/admin/images/remove.png" width="32" height="32"
                class="vtip" title="ลบรายการนี้" /></td>
    </tr>
    <tr class="odd">
        <td>4</td>
        <td>นางวลัยพร ติ้วเจริญสกุล<br />
            3-1007-22414-34-9</td>
        <td>06/07/2560<br />
            08.09 น.</td>
        <td>65 แสงทองวิลล่า ถ.พระปิ่นเกล้า 4 บางยี่ขัน บางพลัด กทม. 10700 </td>
        <td class="txtCen"><img src="themes/admin/images/ico_pedding.png" width="32" height="32" class="vtip" title="รอการตรวจสอบ" /></td>
        <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="themes/admin/images/edit.png" width="24" height="24"
                    class="vtip" title="แก้ไขรายการนี้" /></a> <img src="themes/admin/images/remove.png" width="32" height="32"
                class="vtip" title="ลบรายการนี้" /></td>
    </tr>
    <tr>
        <td>5</td>
        <td class="odd">นายสมพร สุขธรรมนิตย์<br />
            3-1107-02134-81-7</td>
        <td class="odd">07/07/2560<br />
            12.27 น.</td>
        <td>69 ม.5 แขวงออเงิน เขตสายไหม กทม. 10220</td>
        <td class="txtCen"><img src="themes/admin/images/ico_passed.png" width="32" height="32" class="vtip" title="ผ่านการตรวจสอบ" /></td>
        <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="themes/admin/images/edit.png" width="24" height="24"
                    class="vtip" title="แก้ไขรายการนี้" /></a> <img src="themes/admin/images/remove.png" width="32" height="32"
                class="vtip" title="ลบรายการนี้" /></td>
    </tr> -->

</table>

<?php echo $rs->pagination()?>

<!-- <div class="paginationTG">
    <ul>
        <li style="margin-right:10px;">หน้าที่</li>
        <li class="currentpage">1</li>
        <li><a href=''>2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li><a href="">5</a></li>
        <li><a href="">6</a></li>
        <li><a href="">7</a></li> . . . <li><a href="">19</a></li>
        <li><a href="">20</a></li>
        <li><a href="">21</a></li>
    </ul>
</div> -->


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