<h3>สมาชิก (เพิ่ม / แก้ไข)</h3>
<table class="tbadd">
<tr>
  <th>ชื่อ - สกุล<span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline"><select name="select3" class="form-control" style="width:auto;">
      <option>+ เลือกคำนำหน้า +</option>
      <option>นาย</option>
      <option>นาง</option>
      <option>นางสาว</option>
      <option>ด.ช.</option>
      <option>ด.ญ.</option>
</select>
<input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:430px;" placeholder="ชื่อและนามสกุล"/></div>
</td>
</tr>
<tr>
  <th>เลขบัตรประชาชน<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea3" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;"/></td>
</tr>
<tr>
  <th>วันเดือนปี เกิด<span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline"><input name="textarea5" type="text" class="form-control fdate" id="textarea6" value="" style="width:120px;"/> <img src="images/calendar.png" /></div></td>
</tr>
<tr>
  <th>ที่อยู่<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea6" type="text" class="form-control" id="textarea8" value="" placeholder="บ้านเลขที่ หมู่ ซอย ถนน" style="width:600px; margin-bottom:5px;"/>
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
    </div></td>
</tr>
<tr>
  <th>เบอร์ติดต่อ<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:400px;" placeholder="เบอร์โทรศัพท์ หรือเบอร์มือถือ"/></td>
</tr>
<tr>
  <th>อาชีพ</th>
  <td><input name="textarea9" type="text" class="form-control" id="textarea10" value="" style="width:400px;" placeholder="กรอกอาชีพ"/></td>
</tr>
<tr>
  <th>อีเมล์<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea2" type="text" class="form-control" id="textarea2" value="" placeholder="exsample@abc.com" style="width:400px;"/></td>
</tr>
<tr>
  <th>รหัสผ่าน<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea" type="password" class="form-control" id="textarea" value="" style="width:200px;"/></td>
</tr>
<tr>
  <th>ยืนยันรหัสผ่าน<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea2" type="password" class="form-control" id="textarea5" value="" style="width:200px;"/></td>
</tr>
<tr>
  <th>ยืนยันการใช้งานแล้ว</th>
  <td><input name="checkbox2" type="checkbox" id="checkbox2" checked="checked" /></td>
</tr>
</table>
<div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>