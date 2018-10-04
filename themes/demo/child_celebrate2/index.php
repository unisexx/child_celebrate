<? include "admin/include/config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
<? include '_meta.php'?>
<? include '_script.php'?>
<style>
html,body { padding:0; margin:0;}
legend { padding-top:20px; margin:0; font-size:16px; color:#999}

</style>
</head>


<body style="background:#FFFCF4">
<h3 style="text-align:center; margin:0; padding:15px 0; background:#FFF;">ลงทะเบียนแบบเสนอผลงาน <br>กิจกรรมสรรหาและเชิดชูเด็กและเยาวชนดีเด่นแห่งชาติ และผู้ทำคุณประโยชน์ต่อเด็กและเยาวชน</h3>
<div style="margin-left:40%" class="form-inline">
<select name="" class="form-control" style="width:auto; margin-top:10px; background:#FF9">
  <option>สาขา</option>
<option></option>
<option></option>
<option></option>
<option></option>
<option></option>
<option></option>
<option></option>
<option></option>
<option></option>
<option></option>
</select>
<select name="" class="form-control" style="width:auto; margin-top:10px; background:#FF9">
  <option value="1">ประเภท เด็กและเยาวชนดีเด่นแห่งชาติ</option>
  <option value="2">ประเภท บุคคลผู้ทำคุณประโยชน์ต่อเด็กและเยาวชน</option>
  <option value="3">ประเภท กลุ่มเด็กและเยาวชนดีเด่นแห่งชาติ</option>
  <option value="4">ประเภท องค์กรที่ทำคุณประโยชน์ต่อเด็กและเยาวชน</option>
</select>
</div>
<div style="width:900px; margin:0 auto;">


<div id="personalchild">
<fieldset>
<legend>ข้อมูลส่วนตัว</legend>
<table class="tbRegister">
<tr>
  <th>แนบไฟล์รูปภาพ <span class="Txt_red_12"> *</span></th>
  <td><input type="file" name="fileField" id="fileField" class="form-control" style="width:auto"></td>
</tr>
<tr>
  <th>เลขบัตรประชาชน <span class="Txt_red_12"> *</span>/ ชื่อ-สกุล<span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
  <input name="textarea3" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;" placeholder="เลขบัตรประชาชน"/>
  <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;" placeholder="ชื่อและนามสกุล"/>
    </div>
  </td>
</tr>
<tr>
  <th>วันเดือนปีเกิด <span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
    <input name="textarea4" type="text" class="form-control fdate" id="textarea4" value="" style="width:120px;"/>
    <img src="admin/images/calendar.png" />
    (อายุ xx ปี)
    </div>
  </td>
</tr>
<tr>
  <th>ที่อยู่<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea6" type="text" class="form-control" id="textarea8" value="" placeholder="บ้านเลขที่ หมู่ ซอย ถนน" style="width:500px; margin-bottom:5px;"/>
    <div class="form-inline">
    <select id="lunch" class="selectpicker" data-live-search="true" title="เลือกจังหวัด">
      <option>กรุงเทพมหานคร</option>
      <option>กระบี่</option>
      <option>กาญจนบุรี</option>
    </select>
    
    <select id="lunch" class="selectpicker" data-live-search="true" title="เลือกอำเภอ">
      <option>ปทุมวัน</option>
      <option>พญาไท</option>
      <option>สามเสน</option>
    </select>
    
    <select id="lunch" class="selectpicker" data-live-search="true" title="เลือกตำบล">
      <option></option>
      <option></option>
      <option></option>
    </select>
    <input type="text" class="form-control" id="textarea4" placeholder="รหัสไปรษณีย์" style="width:120px;" value="" maxlength="5"/>
    </div></td>
</tr>
<tr>
  <th>โทรศัพท์ / มือถือ <span class="Txt_red_12"> *</span></th>
  <td>
  <div class="form-inline">
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรศัพท์"/>/
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="มือถือ"/>
  </div>
  </td>
</tr>
<tr>
  <th>โทรสาร / อีเมล์ <span class="Txt_red_12"> *</span></th>
  <td>
  <div class="form-inline">
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรสาร"/>/
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="อีเมล์"/>
  </div>
  </td>
</tr>
</table>
</fieldset>

<fieldset>
<legend>ข้อมูลบิดา มารดา และผู้ปกครอง</legend>
<table class="tbRegister">
<tr>
  <th>เลขบัตรประชาชน / ชื่อ-สกุล (บิดา) <span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
  <input name="textarea3" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;" placeholder="เลขบัตรประชาชน บิดา"/>
  <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;" placeholder="ชื่อและนามสกุล บิดา"/>
    </div>
  </td>
</tr>
<tr>
  <th>โทรศัพท์/มือถือ (บิดา) <span class="Txt_red_12"> *</span></th>
  <td>
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ บิดา"/>
  </td>
</tr>
<tr>
  <th>เลขบัตรประชาชน / ชื่อ-สกุล (มารดา) <span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
  <input name="textarea3" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;" placeholder="เลขบัตรประชาชน มารดา"/>
  <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;" placeholder="ชื่อและนามสกุล มารดา"/>
    </div>
  </td>
</tr>
<tr>
  <th>โทรศัพท์/มือถือ (มารดา) <span class="Txt_red_12"> *</span></th>
  <td>
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ มารดา"/>
  </td>
</tr>
<tr>
  <th>เลขบัตรประชาชน / ชื่อ-สกุล (ผู้ปกครอง)</th>
  <td><div class="form-inline">
  <input name="textarea3" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;" placeholder="เลขบัตรประชาชน ผู้ปกครอง"/>
  <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;" placeholder="ชื่อและนามสกุล ผู้ปกครอง"/>
    </div>
  </td>
</tr>
<tr>
  <th>โทรศัพท์/มือถือ (ผู้ปกครอง)</th>
  <td>
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ ผู้ปกครอง"/>
  </td>
</tr>
</table>
</fieldset>

<fieldset>
<legend>ข้อมูลบุคคลอ้างอิง (ไม่ใช่บุคคลในครอบครัว)</legend>
<table class="tbRegister">
<tr>
  <th>เลขบัตรประชาชน <span class="Txt_red_12"> *</span> / ชื่อ-สกุล <span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
  <input name="textarea3" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;" placeholder="เลขบัตรประชาชน"/>
  <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;" placeholder="ชื่อและนามสกุล"/>
    </div>
  </td>
</tr>
<tr>
  <th>โทรศัพท์/มือถือ <span class="Txt_red_12"> *</span></th>
  <td>
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ ผู้ปกครอง"/>
  </td>
</tr>
<tr>
  <th>โทรสาร / อีเมล์</th>
  <td>
  <div class="form-inline">
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรสาร"/>/
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="อีเมล์"/>
  </div>
  </td>
</tr>
</table>
</fieldset>

<fieldset class="clear">
<legend>ประวัติการศึกษา</legend>
<table class="tbRegister">
<tr>
  <th>กำลังศึกษา</th>
  <td><div class="form-inline">
  <select name="" class="form-control" style="width:auto">
    <option>มัธยมศึกษาปีที่ 1</option>
    <option>มัธยมศึกษาปีที่ 2</option>
    <option>มัธยมศึกษาปีที่ 3</option>
    <option>มัธยมศึกษาปีที่ 4 / ปวช. ปีที่ 1</option>
    <option>มัธยมศึกษาปีที่ 5 / ปวช. ปีที่ 2</option>
    <option>มัธยมศึกษาปีที่ 6 / / ปวช. ปีที่ 3</option>
    <option>บัณฑิตปี 1 (ปริญญาตรี) / ปวส. ปีที่ 1</option>
    <option>บัณฑิตปี 2 (ปริญญาตรี) / ปวส. ปีที่ 2</option>
    <option>บัณฑิตปี 3 (ปริญญาตรี)</option>
    <option>บัณฑิตปี 4 (ปริญญาตรี)</option>
    <option>มหาบัณฑิต (ปริญญาโท)</option>
  </select>
  <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;" placeholder="ชื่อสถานศึกษา"/>
    </div>
  </td>
</tr>
<tr>
  <th>จบการศึกษา</th>
  <td><div class="form-inline">
    <select name="select" class="form-control" style="width:auto">
      <option>มัธยมศึกษาปีที่ 1</option>
      <option>มัธยมศึกษาปีที่ 2</option>
      <option>มัธยมศึกษาปีที่ 3</option>
      <option>มัธยมศึกษาปีที่ 4 / ปวช. ปีที่ 1</option>
      <option>มัธยมศึกษาปีที่ 5 / ปวช. ปีที่ 2</option>
      <option>มัธยมศึกษาปีที่ 6 / / ปวช. ปีที่ 3</option>
      <option>บัณฑิตปี 1 (ปริญญาตรี) / ปวส. ปีที่ 1</option>
      <option>บัณฑิตปี 2 (ปริญญาตรี) / ปวส. ปีที่ 2</option>
      <option>บัณฑิตปี 3 (ปริญญาตรี)</option>
      <option>บัณฑิตปี 4 (ปริญญาตรี)</option>
      <option>มหาบัณฑิต (ปริญญาโท)</option>
    </select>
    <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;" placeholder="ชื่อสถานศึกษา"/></div>
  </td>
</tr>

</table>
</fieldset>

<fieldset class="clear">
<legend>อื่นๆ</legend>
<table class="tbRegister">
<tr>
  <th>ตำแหน่งหน้าที่ในอดีต-ปัจจุบัน </th>
  <td><textarea name="" cols="" rows="" class="form-control"></textarea>
  </td>
</tr>
<tr>
  <th>คติธรรมประจำใจ</th>
  <td>
  <textarea name="" cols="" rows="" class="form-control"></textarea>
  </td>
</tr>
<tr>
  <th>แนวทางในการดำรงชีวิตอันเป็นแบบอย่างที่ดีงาม</th>
  <td>
  <textarea name="" cols="" rows="" class="form-control"></textarea>
  </td>
</tr>
</table>
</fieldset>

</div> <!-- personalchild -->



<div id="groupchild">
<fieldset>
<legend>ข้อมูลเบื้องต้น</legend>
<table class="tbRegister">
<tr>
  <th>แนบไฟล์รูปประจำกลุ่ม / สัญลักษณ์ <span class="Txt_red_12"> *</span></th>
  <td><input type="file" name="fileField2" id="fileField2" class="form-control" style="width:auto"></td>
</tr>
<tr>
  <th>ชื่อกลุ่ม/องค์กร<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:500px;" placeholder="ชื่อกลุ่ม"/></td>
</tr>
<tr>
  <th>พ.ศ.ที่ก่อตั้ง / อายุกลุ่ม<span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
    <select name="" class="form-control" style="width:auto">
      <option>2560</option>
      <option>2559</option>
      <option>2558</option>
    </select> /
     <input name="textarea7" type="text" class="form-control" id="textarea7" placeholder="อายุกลุ่ม" style="width:80px;" value="" maxlength="3"/> ปี
    </div>
  </td>
</tr>
<tr>
  <th>สถานที่ติดต่อ <span class="Txt_red_12"> *</span></th>
  <td><input name="textarea6" type="text" class="form-control" id="textarea8" value="" placeholder="บ้านเลขที่ หมู่ ซอย ถนน" style="width:500px; margin-bottom:5px;"/>
    <div class="form-inline">
    <select id="lunch" class="selectpicker" data-live-search="true" title="เลือกจังหวัด">
      <option>กรุงเทพมหานคร</option>
      <option>กระบี่</option>
      <option>กาญจนบุรี</option>
    </select>
    
    <select id="lunch" class="selectpicker" data-live-search="true" title="เลือกอำเภอ">
      <option>ปทุมวัน</option>
      <option>พญาไท</option>
      <option>สามเสน</option>
    </select>
    
    <select id="lunch" class="selectpicker" data-live-search="true" title="เลือกตำบล">
      <option></option>
      <option></option>
      <option></option>
    </select>
    <input type="text" class="form-control" id="textarea4" placeholder="รหัสไปรษณีย์" style="width:120px;" value="" maxlength="5"/>
    </div></td>
</tr>
<tr>
  <th>โทรศัพท์ / มือถือ <span class="Txt_red_12"> *</span></th>
  <td>
  <div class="form-inline">
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรศัพท์"/>/
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="มือถือ"/>
  </div>
  </td>
</tr>
<tr>
  <th>โทรสาร / อีเมล์ <span class="Txt_red_12"> *</span></th>
  <td>
  <div class="form-inline">
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรสาร"/>/
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="อีเมล์"/>
  </div>
  </td>
</tr>
</table>
</fieldset>

<fieldset>
<legend>ข้อมูลประธานกลุ่ม/ผู้ก่อตั้ง และบุคคลอ้างอิง</legend>
<table class="tbRegister">
<tr>
  <th>เลขบัตรประชาชน / ชื่อ-สกุล (ประธานกลุ่ม/ผู้ก่อตั้ง) <span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
  <input name="textarea3" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;" placeholder="เลขบัตรประชาชน ประธานกลุ่ม"/>
  <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;" placeholder="ชื่อและนามสกุล ประธานกลุ่ม"/>
    </div>
  </td>
</tr>
<tr>
  <th>โทรศัพท์/มือถือ (ประธานกลุ่ม) <span class="Txt_red_12"> *</span></th>
  <td>
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ ประธานกลุ่ม"/>
  </td>
</tr>
<tr>
  <th>เลขบัตรประชาชน / ชื่อ-สกุล (บุคคลอ้างอิง)</th>
  <td><div class="form-inline">
  <input name="textarea3" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;" placeholder="เลขบัตรประชาชน บุคคลอ้างอิง"/>
  <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;" placeholder="ชื่อและนามสกุล บุคคลอ้างอิง"/>
    </div>
  </td>
</tr>
<tr>
  <th>โทรศัพท์/มือถือ (บุคคลอ้างอิง)</th>
  <td>
  <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ บุคคลอ้างอิง"/>
  </td>
</tr>
</table>
</fieldset>

<fieldset class="clear">
<legend>อื่นๆ</legend>
<table class="tbRegister">
<tr>
  <th>ประวัติการก่อตั้ง  (โดยสรุป)</th>
  <td><textarea name="" cols="" rows="" class="form-control"></textarea>
  </td>
</tr>
<tr>
  <th>วัตถุประสงค์/ภารกิจการดำเนินงาน  </th>
  <td>
  <textarea name="" cols="" rows="" class="form-control"></textarea>
  </td>
</tr>
<tr>
  <th>ลักษณะของกลุ่ม / องค์กร/หน่วยงาน  </th>
  <td>
 <div><input name="1" type="radio" value=""> เป็นกลุ่มองค์กรอิสระไม่สังกัดหน่วยงานใด ๆ</div>
  <div class="form-inline"><input name="1" type="radio" value=""> เป็นกลุ่ม/องค์กร/สังกัดหน่วยงาน <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:350px;" placeholder="ระบุชื่อหน่วยงาน"/></div>
  </td>
</tr>
<tr>
  <th>ปรัชญาการดำเนินงาน  </th>
  <td>
  <textarea name="" cols="" rows="" class="form-control"></textarea>
  </td>
</tr>
<tr>
  <th>จำนวนสมาชิกกลุ่ม / ผู้บริหารงานองค์กร  </th>
  <td>
  <div class="form-inline" style="margin-bottom:5px;"><input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:80px;" placeholder="จำนวน"/> คน</div>
  <textarea name="" cols="" rows="" class="form-control" placeholder="กรุณาแนบรายชื่อ"></textarea>
  </td>
</tr>
</table>
</fieldset>

</div> <!-- groupchild -->


<div id="summary">
<fieldset>
<legend>สรุปข้อมูลผลงานดีเด่น  </legend>
<table class="tbRegister">
<tr>
  <th>ผลงานดีเด่นที่ได้รับการยอมรับและเป็นประโยชน์ต่อสังคม  (พอสังเขป)</th>
  <td><textarea name="" cols="" rows="" class="form-control" placeholder="ระบุปีที่ดำเนินการและผลงาน  (เป็นผลงานต่อเนื่องไม่น้อยกว่า ๓ ปี และยังดำเนินการจนถึงปัจจุบัน)"></textarea>
  </td>
</tr>
<tr>
  <th>ผลงานที่ผ่านการประกวดหรือแข่งขัน  (พอสังเขป)</th>
  <td>
  <textarea name="" cols="" rows="" class="form-control" placeholder="ผลงานระดับนานาชาติ" style="margin-bottom:5px;"></textarea>
  <textarea name="" cols="" rows="" class="form-control" placeholder="ผลงานระดับชาติ"></textarea>
  </td>
</tr>
<tr>
  <th>สรุปพฤติกรรมดีเด่นอันเป็นรูปธรรมฯ </th>
  <td>
 <textarea name="" cols="" rows="" class="form-control" placeholder="สรุปพฤติกรรมดีเด่นอันเป็นรูปธรรมเกี่ยวกับกระบวนการพัฒนาและคุณภาพของงานในการสร้างคุณงามความดีของเด็กและเยาวชน  กลุ่มเด็กและเยาวชน บุคคล  (อธิบายถึงความวิริยะอุตสาหะ)" style="height:80px;" ></textarea>
  </td>
</tr>
<tr>
  <th>ทัศนคติของผู้สมัครฯ</th>
  <td>
    <textarea name="" cols="" rows="" class="form-control" placeholder="ทัศนคติของผู้สมัครในเรื่องการทำประโยชน์หรือการเสียสละต่อสังคม"></textarea>
    </td>
</tr>
<tr>
  <th>เจ้าของผลงาน  <span class="Txt_red_12"> *</span></th>
  <td><span style="color:#C00; font-size:12px;">หากข้าพเจ้าได้รับการคัดเลือกเข้ารับพระราชทานรางวัล  ยินดีเข้าร่วมกิจกรรมกับกรมกิจการเด็กและเยาวชน ขอรับรองว่าผลงานและเอกสารที่เสนอข้างต้นเป็นความจริงทุกประการ</span>
    <input name="textarea" type="text" class="form-control" id="textarea" value="" style="width:300px;" placeholder="ชื่อเจ้าของผลงาน"/></td>
</tr>
<tr>
  <th>ผู้รับรองผลงาน <span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
    <input name="textarea2" type="text" class="form-control" id="textarea2" value="" style="width:300px;" placeholder="ชื่อและนามสกุล"/>
  <input name="textarea5" type="text" class="form-control" id="textarea5" value="" style="width:300px;" placeholder="ตำแหน่ง"/>
  <input name="textarea9" type="text" class="form-control" id="textarea6" value="" style="width:300px;" placeholder="สังกัด"/>
  <input name="textarea10" type="text" class="form-control" id="textarea10" value="" style="width:300px;" placeholder="เบอร์ติดต่อ"/>
  </div></td>
</tr>
</table>
</fieldset>

</div> <!-- summary -->



<div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>
</fieldset>

</div>

</body>
</html>