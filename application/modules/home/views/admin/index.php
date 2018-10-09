<h3>ข้อมูลลงทะเบียนแบบเสนอผลงาน</h3>
<div id="search">
    <div id="searchBox">
        <form class="form-inline">
            <input type="text" class="form-control " id="exampleInputName2" placeholder="ชื่อ/เลขบัจรประชาชน ผู้ลงทะเบียน / รหัสหรือชื่อหลักสูตร"
                style="width:400px;">
            <select name="select2" class="form-control" style="width:auto">
                <option>-- สถานะ --</option>
            </select>
            <select name="" class="form-control" style="width:auto">
                <option>-- จังหวัด --</option>
                <option>กระบี่</option>
                <option>กรุงเทพฯ </option>
            </select>
            <select name="select" class="form-control" style="width:auto">
                <option>-- อำเภอ --</option>
            </select>
            วันที่ลงทะเบียน
            <input name="textarea5" type="text" class="form-control fdate" id="textarea6" value="" style="width:120px;" />
            <img src="themes/admin/images/calendar.png" />
            <button type="submit" class="btn btn-info"><img src="themes/admin/images/search.png" width="16" height="16" />ค้นหา</button>
        </form>


    </div>
</div>
<!--<div id="btnBox">
  <input type="button" title="เพิ่มหลักสูตร" value="เพิ่มหลักสูตร" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-warning vtip" />
</div>-->

<div id="status">
    <span><img src="themes/admin/images/ico_pedding.png" width="24" height="24" /> <a href="#">รอการตรวจสอบ (10)</a></span>
    <span><img src="themes/admin/images/ico_passed.png" width="24" height="24" /> <a href="#">ผ่านการตรวจสอบ (349)</a></span>
    <span><img src="themes/admin/images/ico_reject.png" width="24" height="24" /> <a href="#">ไม่ผ่าน (2)</a></span>
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