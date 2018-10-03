<form method="post" action="home/admin/home/save/<?php echo $rs->id ?>">

<h3 style="text-align:center; margin:0; padding:15px 0; background:#FFF;">เสนอผลงานกิจกรรมสรรหาและเชิดชูเด็กและเยาวชนดีเด่นแห่งชาติ
    และผู้ทำคุณประโยชน์ต่อเด็กและเยาวชน</h3>
<div style="margin-left:40%">
    <select name="type" class="form-control" style="width:auto; margin-top:10px; background:#FF9">
        <option value="1" <?php echo $rs->type == 1 ? 'selected=selected' : '';?>>ประเภท เด็กและเยาวชนดีเด่นแห่งชาติ</option>
        <option value="2" <?php echo $rs->type == 2 ? 'selected=selected' : '';?>>ประเภท บุคคลผู้ทำคุณประโยชน์ต่อเด็กและเยาวชน</option>
        <option value="3" <?php echo $rs->type == 3 ? 'selected=selected' : '';?>>ประเภท กลุ่มเด็กและเยาวชนดีเด่นแห่งชาติ</option>
        <option value="4" <?php echo $rs->type == 4 ? 'selected=selected' : '';?>>ประเภท องค์กรที่ทำคุณประโยชน์ต่อเด็กและเยาวชน</option>
    </select>
</div>
<div style="width:900px; margin:0 auto;">


    <div id="personalchild">
        <fieldset>
            <legend>ข้อมูลส่วนตัว</legend>
            <table class="tbRegister">
                <tr>
                    <th>วันเวลาที่ลงทะเบียน</th>
                    <td><?php echo DB2Date($rs->created) ?></td>
                </tr>
                <tr>
                    <th>สถานะ</th>
                    <td>
                        <div class="form-inline">
                            <select name="status" class="form-control" style="width:auto;">
                                <option value="รอการตรวจสอบ" <?php echo $rs->status == 'รอการตรวจสอบ' ? 'selected=selected' : '';?>>รอการตรวจสอบ</option>
                                <option value="ผ่านการตรวจสอบ" <?php echo $rs->status == 'ผ่านการตรวจสอบ' ? 'selected=selected' : '';?>>ผ่านการตรวจสอบ</option>
                                <option value="ไม่ผ่านการตรวจสอบ" <?php echo $rs->status == 'ไม่ผ่านการตรวจสอบ' ? 'selected=selected' : '';?>>ไม่ผ่านการตรวจสอบ</option>
                            </select> <input name="input" type="submit" title="บันทึก" value="บันทึก" class="btn btn-primary"
                                style="width:100px;" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>เลขบัตรประชาชน <span class="Txt_red_12"> *</span>/ ชื่อ-สกุล<span class="Txt_red_12"> *</span></th>
                    <td>
                        <div class="form-inline">
                            <input name="id_card" type="text" class="form-control fidcard" value="<?php echo @$rs->id_card?>"
                                style="width:200px;" placeholder="เลขบัตรประชาชน" />
                            <input name="fullname" type="text" class="form-control" value="<?php echo @$rs->fullname?>" style="width:300px;"
                                placeholder="ชื่อและนามสกุล" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>วันเดือนปีเกิด <span class="Txt_red_12"> *</span></th>
                    <td>
                        <div class="form-inline">
                            <input name="birthdate" type="text" class="form-control fdate" value="<?php echo DB2Date($rs->birthdate) ?>"
                                style="width:120px;" />
                            <img src="themes/admin/images/calendar.png" />
                            (อายุ xx ปี)
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>ที่อยู่<span class="Txt_red_12"> *</span></th>
                    <td><input name="address" type="text" class="form-control" value="<?php echo @$rs->address?>" placeholder="บ้านเลขที่ หมู่ ซอย ถนน"
                            style="width:500px; margin-bottom:5px;" />
                        <div class="form-inline">

                            <?php echo form_dropdown('province_id', get_option('id','name','st_provinces order by name asc'), @$rs->province_id,'class="selectpicker province" data-live-search="true" data-size="7" title="เลือกจังหวัด"');?>

                            <span class="spanDistrict">
                            <?php if(@$rs->province_id):?>
                                <?php echo form_dropdown('district_id', get_option('id','name','st_districts where st_province_id = '.$rs->province_id.' and status = 1 order by name asc'), @$rs->district_id,'class="selectpicker" data-live-search="true" data-size="7" title="เลือกอำเภอ"');?>
                            <?php else:?>
                                <select name="district_id" class="selectpicker" data-live-search="true" title="เลือกอำเภอ" disabled="disabled">
                                    <option>--</option>
                                </select>
                            <?php endif;?>
                            </span>

                            <span class="spanSubdistrict">
                                <?php if(@$rs->province_id and @$rs->district_id):?>
                                    <?php echo form_dropdown('subdistrict_id', get_option('id','name','st_subdistricts where st_province_id = '.@$rs->province_id.' and st_district_id = '.@$rs->district_id.' and status = 1 order by name asc'), @$rs->subdistrict_id,'class="selectpicker" data-live-search="true" data-size="7" title="เลือกตำบล"');?>
                                <?php else:?>
                                    <select name="subdistrict_id" class="selectpicker" data-live-search="true" title="เลือกตำบล" disabled="disabled">
                                        <option>--</option>
                                    </select>
                                <?php endif;?>
                            </span>

                            <input name="postcode" type="text" class="form-control" placeholder="รหัสไปรษณีย์" style="width:120px;"
                                value="<?php echo @$rs->postcode?>" maxlength="5" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรศัพท์ / มือถือ</th>
                    <td>
                        <div class="form-inline">
                            <input name="tel" type="text" class="form-control" value="<?php echo @$rs->tel?>" style="width:250px;"
                                placeholder="โทรศัพท์" />/
                            <input name="mobile" type="text" class="form-control" value="<?php echo @$rs->mobile?>" style="width:250px;"
                                placeholder="มือถือ" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรสาร / อีเมล์</th>
                    <td>
                        <div class="form-inline">
                            <input name="fax" type="text" class="form-control" value="<?php echo @$rs->fax?>" style="width:250px;"
                                placeholder="โทรสาร" />/
                            <input name="email" type="text" class="form-control" value="<?php echo @$rs->email?>" style="width:250px;"
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
                    <th>เลขบัตรประชาชน / ชื่อ-สกุล (บิดา)</th>
                    <td>
                        <div class="form-inline">
                            <input name="f_id_card" type="text" class="form-control fidcard" value="<?php echo @$rs->f_id_card?>"
                                style="width:200px;" placeholder="เลขบัตรประชาชน บิดา" />
                            <input name="f_fullname" type="text" class="form-control" value="<?php echo @$rs->f_fullname?>" style="width:300px;"
                                placeholder="ชื่อและนามสกุล บิดา" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรศัพท์/มือถือ (บิดา)</th>
                    <td>
                        <input name="f_tel" type="text" class="form-control" value="<?php echo @$rs->f_tel?>" style="width:250px;"
                            placeholder="โทรศัพท์/มือถือ บิดา" />
                    </td>
                </tr>
                <tr>
                    <th>เลขบัตรประชาชน / ชื่อ-สกุล (มารดา)</th>
                    <td>
                        <div class="form-inline">
                            <input name="m_id_card" type="text" class="form-control fidcard" value="<?php echo @$rs->m_id_card?>"
                                style="width:200px;" placeholder="เลขบัตรประชาชน มารดา" />
                            <input name="m_fullname" type="text" class="form-control" value="<?php echo @$rs->m_fullname?>" style="width:300px;"
                                placeholder="ชื่อและนามสกุล มารดา" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรศัพท์/มือถือ (มารดา)</th>
                    <td>
                        <input name="m_tel" type="text" class="form-control" value="<?php echo @$rs->m_tel?>" style="width:250px;"
                            placeholder="โทรศัพท์/มือถือ มารดา" />
                    </td>
                </tr>
                <tr>
                    <th>เลขบัตรประชาชน / ชื่อ-สกุล (ผู้ปกครอง)</th>
                    <td>
                        <div class="form-inline">
                            <input name="p_id_card" type="text" class="form-control fidcard" value="<?php echo @$rs->p_id_card?>"
                                style="width:200px;" placeholder="เลขบัตรประชาชน ผู้ปกครอง" />
                            <input name="p_fullname" type="text" class="form-control" value="<?php echo @$rs->p_fullname?>" style="width:300px;"
                                placeholder="ชื่อและนามสกุล ผู้ปกครอง" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรศัพท์/มือถือ (ผู้ปกครอง)</th>
                    <td>
                        <input name="p_tel" type="text" class="form-control" value="<?php echo @$rs->p_tel?>" style="width:250px;"
                            placeholder="โทรศัพท์/มือถือ ผู้ปกครอง" />
                    </td>
                </tr>
            </table>
        </fieldset>

        <fieldset>
            <legend>ข้อมูลบุคคลอ้างอิง (ไม่ใช่บุคคลในครอบครัว)</legend>
            <table class="tbRegister">
                <tr>
                    <th>เลขบัตรประชาชน / ชื่อ-สกุล</th>
                    <td>
                        <div class="form-inline">
                            <input name="r_id_card" type="text" class="form-control fidcard" value="<?php echo @$rs->r_id_card?>"
                                style="width:200px;" placeholder="เลขบัตรประชาชน" />
                            <input name="r_fullname" type="text" class="form-control" value="<?php echo @$rs->r_fullname?>" style="width:300px;"
                                placeholder="ชื่อและนามสกุล" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรศัพท์/มือถือ</th>
                    <td>
                        <input name="r_tel" type="text" class="form-control" value="<?php echo @$rs->r_tel?>" style="width:250px;"
                            placeholder="โทรศัพท์/มือถือ ผู้ปกครอง" />
                    </td>
                </tr>
                <tr>
                    <th>โทรสาร / อีเมล์</th>
                    <td>
                        <div class="form-inline">
                            <input name="r_fax" type="text" class="form-control" value="<?php echo @$rs->r_fax?>" style="width:250px;"
                                placeholder="โทรสาร" />/
                            <input name="r_email" type="text" class="form-control" value="<?php echo @$rs->r_email?>" style="width:250px;"
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
                                <option value="a" <?php echo $rs->studying_type == 'a' ? 'selected=selected' : '';?>>a</option>
                                <option value="b" <?php echo $rs->studying_type == 'b' ? 'selected=selected' : '';?>>b</option>
                            </select>
                            <input name="studying_name" type="text" class="form-control" value="<?php echo @$rs->studying_name?>" style="width:300px;"
                                placeholder="ชื่อสถานศึกษา" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>จบการศึกษา</th>
                    <td>
                        <div class="form-inline">
                            <select name="graduate_type" class="form-control" style="width:auto">
                                <option value="a" <?php echo $rs->graduate_type == 'a' ? 'selected=selected' : '';?>>a</option>
                                <option value="b" <?php echo $rs->graduate_type == 'b' ? 'selected=selected' : '';?>>b</option>
                            </select>
                            <input name="graduate_name" type="text" class="form-control" value="<?php echo @$rs->graduate_name?>" style="width:300px;"
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
                    <td><textarea name="position" cols="" rows="" class="form-control"><?php echo @$rs->position?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>คติธรรมประจำใจ/มือถือ</th>
                    <td>
                        <textarea name="mindful" cols="" rows="" class="form-control"><?php echo @$rs->mindful?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>แนวทางในการดำรงชีวิตอันเป็นแบบอย่างที่ดีงาม</th>
                    <td>
                        <textarea name="way" cols="" rows="" class="form-control"><?php echo @$rs->way?></textarea>
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
                    <th>ชื่อกลุ่ม/องค์กร<span class="Txt_red_12"> *</span></th>
                    <td><input name="g_name" type="text" class="form-control" value="<?php echo @$rs->g_name?>" style="width:500px;"
                            placeholder="ชื่อกลุ่ม" /></td>
                </tr>
                <tr>
                    <th>พ.ศ.ที่ก่อตั้ง / อายุกลุ่ม<span class="Txt_red_12"> *</span></th>
                    <td>
                        <div class="form-inline">
                            <select name="g_create" class="form-control" style="width:auto">
                                <option>2560</option>
                                <option>2559</option>
                                <option>2558</option>
                            </select> /
                            <input name="g_age" type="text" class="form-control" placeholder="อายุกลุ่ม"
                                style="width:80px;" value="<?php echo @$rs->g_age?>" maxlength="3" /> ปี
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>สถานที่ติดต่อ <span class="Txt_red_12"> *</span></th>
                    <td><input name="g_address" type="text" class="form-control" value="<?php echo @$rs->g_address?>" placeholder="บ้านเลขที่ หมู่ ซอย ถนน"
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
                            <input name="g_postcode" type="text" class="form-control" placeholder="รหัสไปรษณีย์" style="width:120px;"
                                value="<?php echo @$rs->g_postcode?>" maxlength="5" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรศัพท์ / มือถือ</th>
                    <td>
                        <div class="form-inline">
                            <input name="g_tel" type="text" class="form-control" value="<?php echo @$rs->g_tel?>" style="width:250px;"
                                placeholder="โทรศัพท์" />/
                            <input name="g_mobile" type="text" class="form-control" value="<?php echo @$rs->g_mobile?>" style="width:250px;"
                                placeholder="มือถือ" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรสาร / อีเมล์</th>
                    <td>
                        <div class="form-inline">
                            <input name="g_fax" type="text" class="form-control" value="<?php echo @$rs->g_fax?>" style="width:250px;"
                                placeholder="โทรสาร" />/
                            <input name="g_email" type="text" class="form-control" value="<?php echo @$rs->g_email?>" style="width:250px;"
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
                    <th>เลขบัตรประชาชน / ชื่อ-สกุล (ประธานกลุ่ม/ผู้ก่อตั้ง)</th>
                    <td>
                        <div class="form-inline">
                            <input name="gp_id_card" type="text" class="form-control fidcard" value="<?php echo @$rs->gp_id_card?>"
                                style="width:200px;" placeholder="เลขบัตรประชาชน ประธานกลุ่ม" />
                            <input name="gp_fullname" type="text" class="form-control" value="<?php echo @$rs->gp_fullname?>" style="width:300px;"
                                placeholder="ชื่อและนามสกุล ประธานกลุ่ม" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรศัพท์/มือถือ (ประธานกลุ่ม)</th>
                    <td>
                        <input name="gp_tel" type="text" class="form-control" value="<?php echo @$rs->gp_tel?>" style="width:250px;"
                            placeholder="โทรศัพท์/มือถือ ประธานกลุ่ม" />
                    </td>
                </tr>
                <tr>
                    <th>เลขบัตรประชาชน / ชื่อ-สกุล (บุคคลอ้างอิง)</th>
                    <td>
                        <div class="form-inline">
                            <input name="gpr_id_card" type="text" class="form-control fidcard" value="<?php echo @$rs->gpr_id_card?>"
                                style="width:200px;" placeholder="เลขบัตรประชาชน บุคคลอ้างอิง" />
                            <input name="gpr_fullname" type="text" class="form-control" value="<?php echo @$rs->gpr_fullname?>" style="width:300px;"
                                placeholder="ชื่อและนามสกุล บุคคลอ้างอิง" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรศัพท์/มือถือ (บุคคลอ้างอิง)</th>
                    <td>
                        <input name="gpr_tel" type="text" class="form-control" value="<?php echo @$rs->gpr_tel?>" style="width:250px;"
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
                    <td><textarea name="g_history" cols="" rows="" class="form-control"><?php echo @$rs->g_history?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>วัตถุประสงค์/ภารกิจการดำเนินงาน </th>
                    <td>
                        <textarea name="g_objective" cols="" rows="" class="form-control"><?php echo @$rs->g_objective?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>ลักษณะของกลุ่ม / องค์กร/หน่วยงาน </th>
                    <td>
                        <div><input name="g_nature_type" type="radio" value="1"> เป็นกลุ่มองค์กรอิสระไม่สังกัดหน่วยงานใด ๆ</div>
                        <div class="form-inline"><input name="g_nature_type" type="radio" value="2"> เป็นกลุ่ม/องค์กร/สังกัดหน่วยงาน
                            <input name="g_nature_name" type="text" class="form-control" value="<?php echo @$rs->g_nature_name?>" style="width:350px;"
                                placeholder="ระบุชื่อหน่วยงาน" /></div>
                    </td>
                </tr>
                <tr>
                    <th>ปรัชญาการดำเนินงาน </th>
                    <td>
                        <textarea name="g_philo" cols="" rows="" class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>จำนวนสมาชิกกลุ่ม / ผู้บริหารงานองค์กร </th>
                    <td>
                        <div class="form-inline" style="margin-bottom:5px;"><input name="g_member_count" type="text" class="form-control" value="<?php echo @$rs->g_member_count?>" style="width:80px;" placeholder="จำนวน" /> คน</div>
                        <textarea name="g_member_detail" cols="" rows="" class="form-control" placeholder="กรุณาแนบรายชื่อ"><?php echo @$rs->g_member_detail?></textarea>
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
                    <th>ผลงานดีเด่นที่ได้รับการยอมรับและเป็นประโยชน์ต่อสังคม</th>
                    <td><textarea name="outstand" cols="" rows="" class="form-control" placeholder="ระบุปีที่ดำเนินการและผลงาน  (เป็นผลงานต่อเนื่องไม่น้อยกว่า ๓ ปี และยังดำเนินการจนถึงปัจจุบัน)"><?php echo @$rs->outstand?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>ผลงานที่ผ่านการประกวดหรือแข่งขัน </th>
                    <td>
                        <textarea name="contest_1" cols="" rows="" class="form-control" placeholder="ผลงานระดับนานาชาติ" style="margin-bottom:5px;"><?php echo @$rs->contest_1?></textarea>
                        <textarea name="contest_2" cols="" rows="" class="form-control" placeholder="ผลงานระดับชาติ"><?php echo @$rs->contest_2?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>สรุปพฤติกรรมดีเด่นอันเป็นรูปธรรมฯ </th>
                    <td>
                        <textarea name="behavior" cols="" rows="" class="form-control" placeholder="สรุปพฤติกรรมดีเด่นอันเป็นรูปธรรมเกี่ยวกับกระบวนการพัฒนาและคุณภาพของงานในการสร้างคุณงามความดีของเด็กและเยาวชน  กลุ่มเด็กและเยาวชน บุคคล  (อธิบายถึงความวิริยะอุตสาหะ)"
                            style="height:80px;"><?php echo @$rs->behavior?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>เจ้าของผลงาน </th>
                    <td>
                        <span style="color:#C00; font-size:12px;">หากข้าพเจ้าได้รับการคัดเลือกเข้ารับพระราชทานรางวัล
                            ยินดีเข้าร่วมกิจกรรมกับกรมกิจการเด็กและเยาวชน
                            ขอรับรองว่าผลงานและเอกสารที่เสนอข้างต้นเป็นความจริงทุกประการ</span>
                        <input name="owner" type="text" class="form-control" value="<?php echo @$rs->owner?>" style="width:300px;"
                            placeholder="ชื่อเจ้าของผลงาน" />
                    </td>
                </tr>
                <tr>
                    <th>ทัศนคติของผู้สมัครฯ</th>
                    <td>
                        <textarea name="attitude" cols="" rows="" class="form-control" placeholder="ทัศนคติของผู้สมัครในเรื่องการทำประโยชน์หรือการเสียสละต่อสังคม"><?php echo @$rs->attitude?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>ความเห็นสนับสนุนด้านศีลธรรมฯ</th>
                    <td>
                        <textarea name="moral" cols="" rows="" class="form-control" placeholder="ความเห็นสนับสนุนด้านศีลธรรม จริยธรรม และคุณธรรม ของผู้เสนอ/ผู้รับรอง ที่มีต่อผู้สมัครฯ"><?php echo @$rs->moral?></textarea>
                    </td>
                </tr>
            </table>
        </fieldset>

    </div> <!-- summary -->



    <!--<div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>-->
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