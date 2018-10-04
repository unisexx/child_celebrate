<form method="post" action="home/save" enctype="multipart/form-data">

  <h3 style="text-align:center; margin:0; padding:15px 0; background:#FFF;">ลงทะเบียนแบบเสนอผลงาน <br>กิจกรรมสรรหาและเชิดชูเด็กและเยาวชนดีเด่นแห่งชาติ
    และผู้ทำคุณประโยชน์ต่อเด็กและเยาวชน</h3>
  <div style="margin-left:40%">
    <select name="career" class="form-control" style="width:auto; margin-top:10px; background:#FF9">
      <option>สาขากฏหมายและการปกป้องคุ้มครองสิทธิเด็กและเยาวชน</option>
      <option>สาขาการศึกษาและวิชาการ</option>
      <option>สาขากีฬาและนันทนาการ</option>
      <option>สาขาคณิตศาสตร์ วิทยาศาสตร์ คอมพิวเตอร์ และเทคโนโลยี</option>
      <option>สาขาทรัยากรธรรมชาติและสิ่งแวดล้อม</option>
      <option>สาขาพัฒนาเยาวชน บำเพ็ญประโยชน์ และส่งเสริมการมีส่วนร่วมของเยาวชน</option>
      <option>สาขาศิลปวัฒนธรรม</option>
      <option>สาขาศีลธรรม จริยธรรม และคุณธรรม</option>
      <option>สาขาสิ่งประดิษฐ์และนวัตกรรม</option>
      <option>สาขาสือมวลชนเพื่อเด็กและเยาวชนที่ป้องกันปัญหาสังคม</option>
    </select>

    <select name="type" class="form-control" style="width:auto; margin-top:10px; background:#FF9">
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
            <td><input type="file" name="image" id="fileField" class="form-control" style="width:auto"></td>
          </tr>
          <tr>
            <th>เลขบัตรประชาชน <span class="Txt_red_12"> *</span>/ ชื่อ-สกุล<span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="id_card" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;"
                  placeholder="เลขบัตรประชาชน" />
                <input name="fullname" type="text" class="form-control" id="textarea7" value="" style="width:300px;"
                  placeholder="ชื่อและนามสกุล" />
              </div>
            </td>
          </tr>
          <tr>
            <th>วันเดือนปีเกิด <span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="birthdate" type="text" class="form-control fdate" id="textarea4" value="" style="width:120px;" />
                <img src="themes/child_celebrate/admin/images/calendar.png" />
                (อายุ xx ปี)
              </div>
            </td>
          </tr>
          <tr>
            <th>ที่อยู่<span class="Txt_red_12"> *</span></th>
            <td><input name="address" type="text" class="form-control" id="textarea8" value="" placeholder="บ้านเลขที่ หมู่ ซอย ถนน"
                style="width:500px; margin-bottom:5px;" />
              <div class="form-inline">
                
                <?php echo form_dropdown('province_id', get_option('id','name','st_provinces order by name asc'), @$_GET['province_id'],'class="selectpicker province" data-live-search="true" data-size="7" title="เลือกจังหวัด"');?>

                <span class="spanDistrict">
                  <select name="district_id" class="selectpicker" data-live-search="true" title="เลือกอำเภอ" disabled="disabled">
                      <option>--</option>
                  </select>
                </span>

                <span class="spanSubdistrict">
                  <select name="subdistrict_id" class="selectpicker" data-live-search="true" title="เลือกตำบล" disabled="disabled">
                      <option>--</option>
                  </select>
                </span>

                <input name="postcode" type="text" class="form-control" id="textarea4" placeholder="รหัสไปรษณีย์" style="width:120px;"
                  value="" maxlength="5" />
              </div>
            </td>
          </tr>
          <tr>
            <th>โทรศัพท์ / มือถือ<span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="tel" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                  placeholder="โทรศัพท์" />/
                <input name="mobile" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                  placeholder="มือถือ" />
              </div>
            </td>
          </tr>
          <tr>
            <th>โทรสาร / อีเมล์<span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="fax" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                  placeholder="โทรสาร" />/
                <input name="email" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                  placeholder="อีเมล์" />
              </div>
            </td>
          </tr>
        </table>
      </fieldset>

      <fieldset>
        <legend>ข้อมูลบิดา มารดา และผู้ปกครอง</legend>
        <table class="tbRegister">
          <tr>
            <th>เลขบัตรประชาชน / ชื่อ-สกุล (บิดา)<span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="f_id_card" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;"
                  placeholder="เลขบัตรประชาชน บิดา" />
                <input name="f_fullname" type="text" class="form-control" id="textarea7" value="" style="width:300px;"
                  placeholder="ชื่อและนามสกุล บิดา" />
              </div>
            </td>
          </tr>
          <tr>
            <th>โทรศัพท์/มือถือ (บิดา)<span class="Txt_red_12"> *</span></th>
            <td>
              <input name="f_tel" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                placeholder="โทรศัพท์/มือถือ บิดา" />
            </td>
          </tr>
          <tr>
            <th>เลขบัตรประชาชน / ชื่อ-สกุล (มารดา)<span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="m_id_card" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;"
                  placeholder="เลขบัตรประชาชน มารดา" />
                <input name="m_fullname" type="text" class="form-control" id="textarea7" value="" style="width:300px;"
                  placeholder="ชื่อและนามสกุล มารดา" />
              </div>
            </td>
          </tr>
          <tr>
            <th>โทรศัพท์/มือถือ (มารดา)<span class="Txt_red_12"> *</span></th>
            <td>
              <input name="m_tel" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                placeholder="โทรศัพท์/มือถือ มารดา" />
            </td>
          </tr>
          <tr>
            <th>เลขบัตรประชาชน / ชื่อ-สกุล (ผู้ปกครอง)</th>
            <td>
              <div class="form-inline">
                <input name="p_id_card" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;"
                  placeholder="เลขบัตรประชาชน ผู้ปกครอง" />
                <input name="p_fullname" type="text" class="form-control" id="textarea7" value="" style="width:300px;"
                  placeholder="ชื่อและนามสกุล ผู้ปกครอง" />
              </div>
            </td>
          </tr>
          <tr>
            <th>โทรศัพท์/มือถือ (ผู้ปกครอง)</th>
            <td>
              <input name="p_tel" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                placeholder="โทรศัพท์/มือถือ ผู้ปกครอง" />
            </td>
          </tr>
        </table>
      </fieldset>

      <fieldset>
        <legend>ข้อมูลบุคคลอ้างอิง (ไม่ใช่บุคคลในครอบครัว)</legend>
        <table class="tbRegister">
          <tr>
            <th>เลขบัตรประชาชน<span class="Txt_red_12"> *</span> / ชื่อ-สกุล<span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="r_id_card" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;"
                  placeholder="เลขบัตรประชาชน" />
                <input name="r_fullname" type="text" class="form-control" id="textarea7" value="" style="width:300px;"
                  placeholder="ชื่อและนามสกุล" />
              </div>
            </td>
          </tr>
          <tr>
            <th>โทรศัพท์/มือถือ<span class="Txt_red_12"> *</span></th>
            <td>
              <input name="r_tel" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                placeholder="โทรศัพท์/มือถือ ผู้ปกครอง" />
            </td>
          </tr>
          <tr>
            <th>โทรสาร / อีเมล์</th>
            <td>
              <div class="form-inline">
                <input name="r_fax" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                  placeholder="โทรสาร" />/
                <input name="r_email" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                  placeholder="อีเมล์" />
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
            <td>
              <div class="form-inline">
                <select name="studying_type" class="form-control" style="width:auto">
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
                <input name="studying_name" type="text" class="form-control" id="textarea7" value="" style="width:300px;"
                  placeholder="ชื่อสถานศึกษา" />
              </div>
            </td>
          </tr>
          <tr>
            <th>จบการศึกษา</th>
            <td>
              <div class="form-inline">
                <select name="graduate_type" class="form-control" style="width:auto">
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
                <input name="graduate_name" type="text" class="form-control" id="textarea7" value="" style="width:300px;"
                  placeholder="ชื่อสถานศึกษา" /></div>
            </td>
          </tr>

        </table>
      </fieldset>

      <fieldset class="clear">
        <legend>อื่นๆ</legend>
        <table class="tbRegister">
          <tr>
            <th>ตำแหน่งหน้าที่ในอดีต-ปัจจุบัน </th>
            <td><textarea name="position" cols="" rows="" class="form-control"></textarea>
            </td>
          </tr>
          <tr>
            <th>คติธรรมประจำใจ</th>
            <td>
              <textarea name="mindful" cols="" rows="" class="form-control"></textarea>
            </td>
          </tr>
          <tr>
            <th>แนวทางในการดำรงชีวิตอันเป็นแบบอย่างที่ดีงาม</th>
            <td>
              <textarea name="way" cols="" rows="" class="form-control"></textarea>
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
            <td><input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:500px;"
                placeholder="ชื่อกลุ่ม" /></td>
          </tr>
          <tr>
            <th>พ.ศ.ที่ก่อตั้ง / อายุกลุ่ม<span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <select name="" class="form-control" style="width:auto">
                  <option>2560</option>
                  <option>2559</option>
                  <option>2558</option>
                </select> /
                <input name="textarea7" type="text" class="form-control" id="textarea7" placeholder="อายุกลุ่ม" style="width:80px;"
                  value="" maxlength="3" /> ปี
              </div>
            </td>
          </tr>
          <tr>
            <th>สถานที่ติดต่อ <span class="Txt_red_12"> *</span></th>
            <td><input name="textarea6" type="text" class="form-control" id="textarea8" value="" placeholder="บ้านเลขที่ หมู่ ซอย ถนน"
                style="width:500px; margin-bottom:5px;" />
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
                <input type="text" class="form-control" id="textarea4" placeholder="รหัสไปรษณีย์" style="width:120px;"
                  value="" maxlength="5" />
              </div>
            </td>
          </tr>
          <tr>
            <th>โทรศัพท์ / มือถือ<span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                  placeholder="โทรศัพท์" />/
                <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                  placeholder="มือถือ" />
              </div>
            </td>
          </tr>
          <tr>
            <th>โทรสาร / อีเมล์<span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                  placeholder="โทรสาร" />/
                <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                  placeholder="อีเมล์" />
              </div>
            </td>
          </tr>
        </table>
      </fieldset>

      <fieldset>
        <legend>ข้อมูลประธานกลุ่ม/ผู้ก่อตั้ง และบุคคลอ้างอิง</legend>
        <table class="tbRegister">
          <tr>
            <th>เลขบัตรประชาชน / ชื่อ-สกุล (ประธานกลุ่ม/ผู้ก่อตั้ง)<span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="textarea3" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;"
                  placeholder="เลขบัตรประชาชน ประธานกลุ่ม" />
                <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;"
                  placeholder="ชื่อและนามสกุล ประธานกลุ่ม" />
              </div>
            </td>
          </tr>
          <tr>
            <th>โทรศัพท์/มือถือ (ประธานกลุ่ม)<span class="Txt_red_12"> *</span></th>
            <td>
              <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                placeholder="โทรศัพท์/มือถือ ประธานกลุ่ม" />
            </td>
          </tr>
          <tr>
            <th>เลขบัตรประชาชน / ชื่อ-สกุล (บุคคลอ้างอิง)</th>
            <td>
              <div class="form-inline">
                <input name="textarea3" type="text" class="form-control fidcard" id="textarea3" value="" style="width:200px;"
                  placeholder="เลขบัตรประชาชน บุคคลอ้างอิง" />
                <input name="textarea7" type="text" class="form-control" id="textarea7" value="" style="width:300px;"
                  placeholder="ชื่อและนามสกุล บุคคลอ้างอิง" />
              </div>
            </td>
          </tr>
          <tr>
            <th>โทรศัพท์/มือถือ (บุคคลอ้างอิง)</th>
            <td>
              <input name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:250px;"
                placeholder="โทรศัพท์/มือถือ บุคคลอ้างอิง" />
            </td>
          </tr>
        </table>
      </fieldset>

      <fieldset class="clear">
        <legend>อื่นๆ</legend>
        <table class="tbRegister">
          <tr>
            <th>ประวัติการก่อตั้ง (โดยสรุป)</th>
            <td><textarea name="" cols="" rows="" class="form-control"></textarea>
            </td>
          </tr>
          <tr>
            <th>วัตถุประสงค์/ภารกิจการดำเนินงาน </th>
            <td>
              <textarea name="" cols="" rows="" class="form-control"></textarea>
            </td>
          </tr>
          <tr>
            <th>ลักษณะของกลุ่ม / องค์กร/หน่วยงาน </th>
            <td>
              <div><input name="1" type="radio" value=""> เป็นกลุ่มองค์กรอิสระไม่สังกัดหน่วยงานใด ๆ</div>
              <div class="form-inline"><input name="1" type="radio" value=""> เป็นกลุ่ม/องค์กร/สังกัดหน่วยงาน <input
                  name="textarea8" type="text" class="form-control" id="textarea9" value="" style="width:350px;"
                  placeholder="ระบุชื่อหน่วยงาน" /></div>
            </td>
          </tr>
          <tr>
            <th>ปรัชญาการดำเนินงาน </th>
            <td>
              <textarea name="" cols="" rows="" class="form-control"></textarea>
            </td>
          </tr>
          <tr>
            <th>จำนวนสมาชิกกลุ่ม / ผู้บริหารงานองค์กร </th>
            <td>
              <div class="form-inline" style="margin-bottom:5px;"><input name="textarea8" type="text" class="form-control"
                  id="textarea9" value="" style="width:80px;" placeholder="จำนวน" /> คน</div>
              <textarea name="" cols="" rows="" class="form-control" placeholder="กรุณาแนบรายชื่อ"></textarea>
            </td>
          </tr>
        </table>
      </fieldset>

    </div> <!-- groupchild -->


    <div id="summary">
      <fieldset>
        <legend>สรุปข้อมูลผลงานดีเด่น </legend>
        <table class="tbRegister">
          <tr>
            <th>ผลงานดีเด่นที่ได้รับการยอมรับและเป็นประโยชน์ต่อสังคม (พอสังเขป)</th>
            <td><textarea name="outstand" cols="" rows="" class="form-control" placeholder="ระบุปีที่ดำเนินการและผลงาน  (เป็นผลงานต่อเนื่องไม่น้อยกว่า ๓ ปี และยังดำเนินการจนถึงปัจจุบัน)"></textarea>
            </td>
          </tr>
          <tr>
            <th>ผลงานที่ผ่านการประกวดหรือแข่งขัน (พอสังเขป)</th>
            <td>
              <textarea name="contest_1" cols="" rows="" class="form-control" placeholder="ผลงานระดับนานาชาติ" style="margin-bottom:5px;"></textarea>
              <textarea name="contest_2" cols="" rows="" class="form-control" placeholder="ผลงานระดับชาติ"></textarea>
            </td>
          </tr>
          <tr>
            <th>สรุปพฤติกรรมดีเด่นอันเป็นรูปธรรมฯ </th>
            <td>
              <textarea name="behavior" cols="" rows="" class="form-control" placeholder="สรุปพฤติกรรมดีเด่นอันเป็นรูปธรรมเกี่ยวกับกระบวนการพัฒนาและคุณภาพของงานในการสร้างคุณงามความดีของเด็กและเยาวชน  กลุ่มเด็กและเยาวชน บุคคล  (อธิบายถึงความวิริยะอุตสาหะ)"
                style="height:80px;"></textarea>
            </td>
          </tr>
          <tr>
            <th>ทัศนคติของผู้สมัครฯ</th>
            <td>
              <textarea name="attitude" cols="" rows="" class="form-control" placeholder="ทัศนคติของผู้สมัครในเรื่องการทำประโยชน์หรือการเสียสละต่อสังคม"></textarea>
            </td>
          </tr>
          <tr>
            <th>เจ้าของผลงาน <span class="Txt_red_12"> *</span></th>
            <td>
              <span style="color:#C00; font-size:12px;">หากข้าพเจ้าได้รับการคัดเลือกเข้ารับพระราชทานรางวัล
                ยินดีเข้าร่วมกิจกรรมกับกรมกิจการเด็กและเยาวชน
                ขอรับรองว่าผลงานและเอกสารที่เสนอข้างต้นเป็นความจริงทุกประการ</span>
              <input name="owner" type="text" class="form-control" id="textarea7" value="" style="width:300px;"
                placeholder="ชื่อเจ้าของผลงาน" />
            </td>
          </tr>
          <!-- <tr>
            <th>ความเห็นสนับสนุนด้านศีลธรรมฯ</th>
            <td>
              <textarea name="moral" cols="" rows="" class="form-control" placeholder="ความเห็นสนับสนุนด้านศีลธรรม จริยธรรม และคุณธรรม ของผู้เสนอ/ผู้รับรอง ที่มีต่อผู้สมัครฯ"></textarea>
            </td>
          </tr> -->
          <tr>
            <th>ผู้รับรองผลงาน <span class="Txt_red_12"> *</span></th>
            <td>
              <div class="form-inline">
                <input name="textarea2" type="text" class="form-control" id="textarea2" value="" style="width:300px;" placeholder="ชื่อและนามสกุล" />
                <input name="textarea5" type="text" class="form-control" id="textarea5" value="" style="width:300px;" placeholder="ตำแหน่ง" />
                <input name="textarea9" type="text" class="form-control" id="textarea6" value="" style="width:300px;" placeholder="สังกัด" />
                <input name="textarea10" type="text" class="form-control" id="textarea10" value="" style="width:300px;"
                  placeholder="เบอร์ติดต่อ" />
              </div>
            </td>
          </tr>
        </table>
      </fieldset>

    </div> <!-- summary -->



    <div id="btnBoxAdd">
      <input name="input" type="submit" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;" />
      <!-- <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ" onclick="history.back(-1)" class="btn btn-default"
        style="width:100px;" /> -->
    </div>
    </fieldset>

  </div>

</form>

<script>
$(document).ready(function(){

  // select จังหวัด หา อำเภอ
  $(document).on('change', "select.province", function() {
    var province_id = $(this).val();
    AjaxSelectDistrict(province_id);

    // disable all child Element
    $('.spanSubdistrict').find('select').val('เลือกตำบล');
    $('.spanSubdistrict').find('select').prop('disabled', true);
    $('.spanSubdistrict').find('select').selectpicker('refresh');
  });

  // select อำเภอ หา ตำบล
  $(document).on('change', "select.district", function() {
    var province_id = $('select.province').val();
    var district_id = $(this).val();
    AjaxSelectSubdistrict(province_id,district_id);
  });

});


// เลือกจังหวัด แสดงอำเภอ
function AjaxSelectDistrict($province_id){
  if($province_id == ""){
    $('.spanDistrict').find('select').val('').attr("disabled", true);
    $('.spanDistrict').find('select').selectpicker('refresh');
  }else{
    $.get('ajax/ajaxselectdistrict',{
      'province_id' : $province_id
    },function(data){
      $('.spanDistrict').html(data);
      $('.spanDistrict').find('select option:contains("เลือกอำเภอ")').text('+ เลือกอำเภอ +');
      $('.spanDistrict').find('select').selectpicker('refresh');
    });
  }
}

// เลือกอำเภอ แสดงตำบล
function AjaxSelectSubdistrict($province_id,$district_id){
  if($district_id == ""){
    $('.spanSubdistrict').find('select').val('').attr("disabled", true);
    $('.spanSubdistrict').find('select').selectpicker('refresh');
  }else{
    $.get('ajax/ajaxselectsubdistrict',{
      'province_id' : $province_id,
      'district_id' :  $district_id
    },function(data){
      $('.spanSubdistrict').html(data);
      $('.spanSubdistrict').find('select option:contains("เลือกตำบล")').text('+ เลือกตำบล +');
      $('.spanSubdistrict').find('select').selectpicker('refresh');
    });
  }
}
</script>