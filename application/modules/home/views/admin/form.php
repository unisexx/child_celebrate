<form method="post" action="home/admin/home/save/<?php echo $rs->id ?>" enctype="multipart/form-data">

<h3 style="text-align:center; margin:0; padding:15px 0; background:#FFF;">เสนอผลงานกิจกรรมสรรหาและเชิดชูเด็กและเยาวชนดีเด่นแห่งชาติ
    และผู้ทำคุณประโยชน์ต่อเด็กและเยาวชน</h3>
<div style="margin-left:40%">
    <select name="career" class="form-control" style="width:auto; margin-top:10px; background:#FF9">
        <option value="1" <?php echo $rs->career == 1 ? 'selected=selected' : '';?>>สาขากฏหมายและการปกป้องคุ้มครองสิทธิเด็กและเยาวชน</option>
        <option value="2" <?php echo $rs->career == 2 ? 'selected=selected' : '';?>>สาขาการศึกษาและวิชาการ</option>
        <option value="3" <?php echo $rs->career == 3 ? 'selected=selected' : '';?>>สาขากีฬาและนันทนาการ</option>
        <option value="4" <?php echo $rs->career == 4 ? 'selected=selected' : '';?>>สาขาคณิตศาสตร์ วิทยาศาสตร์ คอมพิวเตอร์ และเทคโนโลยี</option>
        <option value="5" <?php echo $rs->career == 5 ? 'selected=selected' : '';?>>สาขาทรัยากรธรรมชาติและสิ่งแวดล้อม</option>
        <option value="6" <?php echo $rs->career == 6 ? 'selected=selected' : '';?>>สาขาพัฒนาเยาวชน บำเพ็ญประโยชน์ และส่งเสริมการมีส่วนร่วมของเยาวชน</option>
        <option value="7" <?php echo $rs->career == 7 ? 'selected=selected' : '';?>>สาขาศิลปวัฒนธรรม</option>
        <option value="8" <?php echo $rs->career == 8 ? 'selected=selected' : '';?>>สาขาศีลธรรม จริยธรรม และคุณธรรม</option>
        <option value="9" <?php echo $rs->career == 9 ? 'selected=selected' : '';?>>สาขาสิ่งประดิษฐ์และนวัตกรรม</option>
        <option value="10" <?php echo $rs->career == 10 ? 'selected=selected' : '';?>>สาขาสือมวลชนเพื่อเด็กและเยาวชนที่ป้องกันปัญหาสังคม</option>
    </select>
    
    <select name="type" class="form-control" style="width:auto; margin-top:10px; background:#FF9">
        <option value="1" <?php echo $rs->type == 1 ? 'selected=selected' : '';?>>ประเภท เด็กและเยาวชนดีเด่นแห่งชาติ</option>
        <option value="2" <?php echo $rs->type == 2 ? 'selected=selected' : '';?>>ประเภท บุคคลผู้ทำคุณประโยชน์ต่อเด็กและเยาวชน</option>
        <option value="3" <?php echo $rs->type == 3 ? 'selected=selected' : '';?>>ประเภท กลุ่มเด็กและเยาวชนดีเด่นแห่งชาติ</option>
        <option value="4" <?php echo $rs->type == 4 ? 'selected=selected' : '';?>>ประเภท องค์กรที่ทำคุณประโยชน์ต่อเด็กและเยาวชน</option>
    </select>
</div>
<div style="width:900px; margin:0 auto;">

        <fieldset>
            <legend>พิจารณาสถานะ</legend>
            <table class="tbRegister">
                <tr>
                    <th>วันเวลาที่ลงทะเบียน</th>
                    <td>
                        <?php echo DB2Date($rs->created) ?>
                    </td>
                </tr>
                <tr>
                    <th>สถานะ</th>
                    <td>
                        <div class="form-inline">
                            <select name="status" class="form-control" style="width:auto;">
                                <option value="รอการตรวจสอบ" <?php echo $rs->status == 'รอการตรวจสอบ' ? 'selected=selected' :
                                    '';?>>รอการตรวจสอบ</option>
                                <option value="ผ่านการตรวจสอบ" <?php echo $rs->status == 'ผ่านการตรวจสอบ' ? 'selected=selected'
                                    :
                                    '';?>>ผ่านการตรวจสอบ</option>
                                <option value="ไม่ผ่านการตรวจสอบ" <?php echo $rs->status == 'ไม่ผ่านการตรวจสอบ' ?
                                    'selected=selected' : '';?>>ไม่ผ่านการตรวจสอบ</option>
                            </select> <input name="input" type="submit" title="บันทึก" value="บันทึก" class="btn btn-primary"
                                style="width:100px;" />
                        </div>
                    </td>
                </tr>
            </table>
        </fieldset>

    <div id="personalchild">
        <fieldset>
            <legend>ข้อมูลส่วนตัว</legend>
            <table class="tbRegister">
                <!-- <tr>
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
                </tr> -->
                <tr>
                    <th>แนบไฟล์รูปภาพ <span class="Txt_red_12"> *</span></th>
                    <td>
                        <?=is_file('uploads/applicant/'.$rs->image)?"<a href='uploads/applicant/".$rs->image."' target='_blank'><img src='uploads/applicant/".$rs->image."' width='90'></a>":"";?>
                        <input type="file" name="image" id="fileField" class="form-control" style="width:auto">
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
                            (อายุ <?php echo calAge(@$rs->birthdate) ?> ปี)
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
                    <th>โทรศัพท์ / มือถือ<span class="Txt_red_12"> *</span></th>
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
                    <th>โทรสาร / อีเมล์<span class="Txt_red_12"> *</span></th>
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
                    <th>เลขบัตรประชาชน / ชื่อ-สกุล (บิดา)<span class="Txt_red_12"> *</span></th>
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
                    <th>โทรศัพท์/มือถือ (บิดา)<span class="Txt_red_12"> *</span></th>
                    <td>
                        <input name="f_tel" type="text" class="form-control" value="<?php echo @$rs->f_tel?>" style="width:250px;"
                            placeholder="โทรศัพท์/มือถือ บิดา" />
                    </td>
                </tr>
                <tr>
                    <th>เลขบัตรประชาชน / ชื่อ-สกุล (มารดา)<span class="Txt_red_12"> *</span></th>
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
                    <th>โทรศัพท์/มือถือ (มารดา)<span class="Txt_red_12"> *</span></th>
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
                    <th>เลขบัตรประชาชน / ชื่อ-สกุล<span class="Txt_red_12"> *</span></th>
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
                    <th>โทรศัพท์/มือถือ<span class="Txt_red_12"> *</span></th>
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
                                <option value="1" <?php echo $rs->studying_type == 1 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 1</option>
                                <option value="2" <?php echo $rs->studying_type == 2 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 2</option>
                                <option value="3" <?php echo $rs->studying_type == 3 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 3</option>
                                <option value="4" <?php echo $rs->studying_type == 4 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 4 / ปวช. ปีที่ 1</option>
                                <option value="5" <?php echo $rs->studying_type == 5 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 5 / ปวช. ปีที่ 2</option>
                                <option value="6" <?php echo $rs->studying_type == 6 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 6 / / ปวช. ปีที่ 3</option>
                                <option value="7" <?php echo $rs->studying_type == 7 ? 'selected=selected' : '';?>>บัณฑิตปี 1 (ปริญญาตรี) / ปวส. ปีที่ 1</option>
                                <option value="8" <?php echo $rs->studying_type == 8 ? 'selected=selected' : '';?>>บัณฑิตปี 2 (ปริญญาตรี) / ปวส. ปีที่ 2</option>
                                <option value="9" <?php echo $rs->studying_type == 9 ? 'selected=selected' : '';?>>บัณฑิตปี 3 (ปริญญาตรี)</option>
                                <option value="10" <?php echo $rs->studying_type == 10 ? 'selected=selected' : '';?>>บัณฑิตปี 4 (ปริญญาตรี)</option>
                                <option value="11" <?php echo $rs->studying_type == 11 ? 'selected=selected' : '';?>>มหาบัณฑิต (ปริญญาโท)</option>
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
                                <option value="1" <?php echo $rs->graduate_type == 1 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 1</option>
                                <option value="2" <?php echo $rs->graduate_type == 2 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 2</option>
                                <option value="3" <?php echo $rs->graduate_type == 3 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 3</option>
                                <option value="4" <?php echo $rs->graduate_type == 4 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 4 / ปวช. ปีที่ 1</option>
                                <option value="5" <?php echo $rs->graduate_type == 5 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 5 / ปวช. ปีที่ 2</option>
                                <option value="6" <?php echo $rs->graduate_type == 6 ? 'selected=selected' : '';?>>มัธยมศึกษาปีที่ 6 / / ปวช. ปีที่ 3</option>
                                <option value="7" <?php echo $rs->graduate_type == 7 ? 'selected=selected' : '';?>>บัณฑิตปี 1 (ปริญญาตรี) / ปวส. ปีที่ 1</option>
                                <option value="8" <?php echo $rs->graduate_type == 8 ? 'selected=selected' : '';?>>บัณฑิตปี 2 (ปริญญาตรี) / ปวส. ปีที่ 2</option>
                                <option value="9" <?php echo $rs->graduate_type == 9 ? 'selected=selected' : '';?>>บัณฑิตปี 3 (ปริญญาตรี)</option>
                                <option value="10" <?php echo $rs->graduate_type == 10 ? 'selected=selected' : '';?>>บัณฑิตปี 4 (ปริญญาตรี)</option>
                                <option value="11" <?php echo $rs->graduate_type == 11 ? 'selected=selected' : '';?>>มหาบัณฑิต (ปริญญาโท)</option>
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
                    <th>คติธรรมประจำใจ</th>
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
                    <th>แนบไฟล์รูปประจำกลุ่ม / สัญลักษณ์ <span class="Txt_red_12"> *</span></th>
                    <td>
                        <?=is_file('uploads/applicant/'.$rs->g_image)?"<a href='uploads/applicant/".$rs->g_image."' target='_blank'><img src='uploads/applicant/".$rs->g_image."' width='90'></a>":"";?>
                        <input type="file" name="g_image" class="form-control" style="width:auto">
                    </td>
                </tr>
                <tr>
                    <th>ชื่อกลุ่ม/องค์กร<span class="Txt_red_12"> *</span></th>
                    <td><input name="g_name" type="text" class="form-control" value="<?php echo @$rs->g_name?>" style="width:500px;" placeholder="ชื่อกลุ่ม" /></td>
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

                            <?php echo form_dropdown('g_province_id', get_option('id','name','st_provinces order by name asc'), @$rs->g_province_id,'class="selectpicker province" data-live-search="true" data-size="7" title="เลือกจังหวัด"');?>

                            <span class="spang_District">
                            <?php if(@$rs->g_province_id):?>
                                <?php echo form_dropdown('g_district_id', get_option('id','name','st_districts where st_province_id = '.$rs->g_province_id.' and status = 1 order by name asc'), @$rs->g_district_id,'class="selectpicker" data-live-search="true" data-size="7" title="เลือกอำเภอ"');?>
                            <?php else:?>
                                <select name="g_district_id" class="selectpicker" data-live-search="true" title="เลือกอำเภอ" disabled="disabled">
                                    <option>--</option>
                                </select>
                            <?php endif;?>
                            </span>

                            <span class="spang_Subdistrict">
                                <?php if(@$rs->g_province_id and @$rs->g_district_id):?>
                                    <?php echo form_dropdown('g_subdistrict_id', get_option('id','name','st_subdistricts where st_province_id = '.@$rs->g_province_id.' and st_district_id = '.@$rs->g_district_id.' and status = 1 order by name asc'), @$rs->g_subdistrict_id,'class="selectpicker" data-live-search="true" data-size="7" title="เลือกตำบล"');?>
                                <?php else:?>
                                    <select name="g_subdistrict_id" class="selectpicker" data-live-search="true" title="เลือกตำบล" disabled="disabled">
                                        <option>--</option>
                                    </select>
                                <?php endif;?>
                            </span>

                            <input name="g_postcode" type="text" class="form-control" placeholder="รหัสไปรษณีย์" style="width:120px;"
                                value="<?php echo @$rs->g_postcode?>" maxlength="5" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>โทรศัพท์ / มือถือ <span class="Txt_red_12"> *</span></th>
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
                    <th>โทรสาร / อีเมล์ <span class="Txt_red_12"> *</span></th>
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
                    <th>เลขบัตรประชาชน / ชื่อ-สกุล (ประธานกลุ่ม/ผู้ก่อตั้ง)<span class="Txt_red_12"> *</span></th>
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
                    <th>โทรศัพท์/มือถือ (ประธานกลุ่ม)<span class="Txt_red_12"> *</span></th>
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
                        <div>
                            <input name="g_nature_type" type="radio" value="1" <?php echo $rs->g_nature_type == 1 ? 'checked' : '' ;?>> เป็นกลุ่มองค์กรอิสระไม่สังกัดหน่วยงานใด ๆ
                        </div>
                        <div class="form-inline">
                            <input name="g_nature_type" type="radio" value="2" <?php echo $rs->g_nature_type == 2 ? 'checked' : '' ;?>> 
                            เป็นกลุ่ม/องค์กร/สังกัดหน่วยงาน

                            <input name="g_nature_name" type="text" class="form-control" value="<?php echo @$rs->g_nature_name?>" style="width:350px;" placeholder="ระบุชื่อหน่วยงาน" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>ปรัชญาการดำเนินงาน </th>
                    <td>
                        <textarea name="g_philo" cols="" rows="" class="form-control"><?php echo @$rs->g_philo?></textarea>
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
                    <th>ทัศนคติของผู้สมัครฯ</th>
                    <td>
                        <textarea name="attitude" cols="" rows="" class="form-control" placeholder="ทัศนคติของผู้สมัครในเรื่องการทำประโยชน์หรือการเสียสละต่อสังคม"><?php echo @$rs->attitude?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>เจ้าของผลงาน<span class="Txt_red_12"> *</span></th>
                    <td>
                        <span style="color:#C00; font-size:12px;">หากข้าพเจ้าได้รับการคัดเลือกเข้ารับพระราชทานรางวัล
                            ยินดีเข้าร่วมกิจกรรมกับกรมกิจการเด็กและเยาวชน
                            ขอรับรองว่าผลงานและเอกสารที่เสนอข้างต้นเป็นความจริงทุกประการ</span>
                        <input name="owner" type="text" class="form-control" value="<?php echo @$rs->owner?>" style="width:300px;"
                            placeholder="ชื่อเจ้าของผลงาน" />
                    </td>
                </tr>
                <!-- <tr>
                    <th>ความเห็นสนับสนุนด้านศีลธรรมฯ</th>
                    <td>
                        <textarea name="moral" cols="" rows="" class="form-control" placeholder="ความเห็นสนับสนุนด้านศีลธรรม จริยธรรม และคุณธรรม ของผู้เสนอ/ผู้รับรอง ที่มีต่อผู้สมัครฯ"><?php echo @$rs->moral?></textarea>
                    </td>
                </tr> -->
                <tr>
                    <th>ผู้รับรองผลงาน <span class="Txt_red_12"> *</span></th>
                    <td>
                        <div class="form-inline">
                            <input name="contributor_name" type="text" class="form-control" value="<?php echo @$rs->contributor_name?>" style="width:300px;" placeholder="ชื่อและนามสกุล" />
                            <input name="contributor_position" type="text" class="form-control" value="<?php echo @$rs->contributor_position?>" style="width:300px;" placeholder="ตำแหน่ง" />
                            <input name="contributor_aff" type="text" class="form-control" value="<?php echo @$rs->contributor_aff?>" style="width:300px;" placeholder="สังกัด" />
                            <input name="contributor_tel" type="text" class="form-control" value="<?php echo @$rs->contributor_tel?>" style="width:300px;"
                            placeholder="เบอร์ติดต่อ" />
                        </div>
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


  // select จังหวัด หา อำเภอ {{กลุ่ม}}
  $(document).on('change', "select[name=g_province_id]", function() {
    var province_id = $(this).val();
    var district_name = 'g_district_id';
    var district_element = $('.spang_District');
    AjaxSelectDistrict(province_id,district_name,district_element);

    // disable all child Element
    $('.spang_Subdistrict').find('select').val('เลือกตำบล');
    $('.spang_Subdistrict').find('select').prop('disabled', true);
    $('.spang_Subdistrict').find('select').selectpicker('refresh');
  });

  // select อำเภอ หา ตำบล {{กลุ่ม}}
  $(document).on('change', "select[name=g_district_id]", function() {
    var province_id = $('select[name=g_province_id]').val();
    var district_id = $(this).val();
    var subdistrict_name = 'g_subdistrict_id';
    var subdistrict_element = $('.spang_Subdistrict');
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