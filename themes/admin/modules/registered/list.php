<h3>ข้อมูลลงทะเบียนแบบเสนอผลงาน</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
    <input type="text" class="form-control " id="exampleInputName2" placeholder="ชื่อ/เลขบัจรประชาชน ผู้ลงทะเบียน / รหัสหรือชื่อหลักสูตร" style="width:400px;">
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
<input name="textarea5" type="text" class="form-control fdate" id="textarea6" value="" style="width:120px;"/>
<img src="images/calendar.png" />
<button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>

  
</div>
</div>
<!--<div id="btnBox">
  <input type="button" title="เพิ่มหลักสูตร" value="เพิ่มหลักสูตร" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-warning vtip" />
</div>-->

<div id="status">
<span><img src="images/ico_pedding.png" width="24" height="24" /> <a href="#">รอการตรวจสอบ (10)</a></span>
<span><img src="images/ico_passed.png" width="24" height="24" /> <a href="#">ผ่านการตรวจสอบ (349)</a></span>
<span><img src="images/ico_reject.png" width="24" height="24" /> <a href="#">ไม่ผ่าน (2)</a></span>
</div>

<div class="paginationTG">
	<ul>
    <li style="margin-right:10px;">หน้าที่</li>
	<li class="currentpage">1</li><li ><a href=''>2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li><a href="">5</a></li>
	<li><a href="">6</a></li>
	<li><a href="">7</a></li> . . . <li ><a href="">19</a></li>
	<li><a href="">20</a></li><li ><a href="">21</a></li>
	</ul>
</div>

<table class="tblist">
<tr>
  <th>ลำดับ</th>
  <th>ชื่อผู้สมัคร</th>
  <th>วันเวลาที่ลงทะเบียน</th>
  <th style="width:35%">ที่อยู่</th>
  <th class="txtCen">สถานะ</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>นายธันยกร  หลีสันติพงศ์<br />
    3-1007-00134-08-1</td>
  <td>01/07/2560<br />
    14.50 น.</td>
  <td>52 หมู่ 6 ต . จรเข้เผือก อ. ด่านมะขามเตี้ย จ . กาญจนบุรี 71260</td>
  <td class="txtCen"><img src="images/ico_pedding.png" width="32" height="32" class="vtip" title="รอการตรวจสอบ" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>นางสาวประภาศรี  ทองกิ่งแก้ว<br />
    3-3071-10141-09-2</td>
  <td>01/07/2560<br />
    15.20 น.</td>
  <td>1296/105-7 ถ.กรุงเทพ-นนทบุรี เขต บางซื่อ กทม. 10800</td>
  <td class="txtCen"><img src="images/ico_passed.png" width="32" height="32" class="vtip" title="ผ่านการตรวจสอบ" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>นางสาววันเพ็ญ  แซ่เอีย<br />
    3-1017-01343-81-7</td>
  <td>05/07/2560<br />
    11.10 น.</td>
  <td>924. ถ.พระราม9. แขวงบางกะปิ เขตห้วยขวาง กทม.10310</td>
  <td class="txtCen"><img src="images/ico_reject.png" width="32" height="32" class="vtip" title="ไม่ผ่าน" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>4</td>
  <td>นางวลัยพร  ติ้วเจริญสกุล<br />
    3-1007-22414-34-9</td>
  <td>06/07/2560<br />
    08.09 น.</td>
  <td>65 แสงทองวิลล่า ถ.พระปิ่นเกล้า 4 บางยี่ขัน บางพลัด กทม. 10700 </td>
  <td class="txtCen"><img src="images/ico_pedding.png" width="32" height="32" class="vtip" title="รอการตรวจสอบ" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>5</td>
  <td class="odd">นายสมพร  สุขธรรมนิตย์<br />
    3-1107-02134-81-7</td>
  <td class="odd">07/07/2560<br />
    12.27 น.</td>
  <td>69 ม.5 แขวงออเงิน เขตสายไหม กทม. 10220</td>
  <td class="txtCen"><img src="images/ico_passed.png" width="32" height="32" class="vtip" title="ผ่านการตรวจสอบ" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
</table>

<div class="paginationTG">
	<ul>
    <li style="margin-right:10px;">หน้าที่</li>
	<li class="currentpage">1</li><li ><a href=''>2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li><a href="">5</a></li>
	<li><a href="">6</a></li>
	<li><a href="">7</a></li> . . . <li ><a href="">19</a></li>
	<li><a href="">20</a></li><li ><a href="">21</a></li>
  </ul>
</div>