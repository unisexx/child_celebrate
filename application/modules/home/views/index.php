<form id="regisFrm" method="post" action="home/save" enctype="multipart/form-data">

	<h3 style="text-align:center; margin:0; padding:15px 0; background:#FFF;">ลงทะเบียนแบบเสนอผลงาน <br>กิจกรรมสรรหาและเชิดชูเด็กและเยาวชนดีเด่นแห่งชาติ
		และผู้ทำคุณประโยชน์ต่อเด็กและเยาวชน</h3>
	<div style="margin-left:40%">
		<select name="career" class="form-control" style="width:auto; margin-top:10px; background:#FF9">
			<option value="1">สาขากฏหมายและการปกป้องคุ้มครองสิทธิเด็กและเยาวชน</option>
			<option value="2">สาขาการศึกษาและวิชาการ</option>
			<option value="3">สาขากีฬาและนันทนาการ</option>
			<option value="4">สาขาคณิตศาสตร์ วิทยาศาสตร์ คอมพิวเตอร์ และเทคโนโลยี</option>
			<option value="5">สาขาทรัยากรธรรมชาติและสิ่งแวดล้อม</option>
			<option value="6">สาขาพัฒนาเยาวชน บำเพ็ญประโยชน์ และส่งเสริมการมีส่วนร่วมของเยาวชน</option>
			<option value="7">สาขาศิลปวัฒนธรรม</option>
			<option value="8">สาขาศีลธรรม จริยธรรม และคุณธรรม</option>
			<option value="9">สาขาสิ่งประดิษฐ์และนวัตกรรม</option>
			<option value="10">สาขาสือมวลชนเพื่อเด็กและเยาวชนที่ป้องกันปัญหาสังคม</option>
			<option value="11">สาขาอาชีพ</option>
		</select>

		<select name="type" class="form-control" style="width:auto; margin-top:10px; background:#FF9">
			<option value="1">ประเภท เด็กและเยาวชนดีเด่นแห่งชาติ</option>
			<option value="3">ประเภท กลุ่มเด็กและเยาวชนดีเด่นแห่งชาติ</option>
			<option value="2">ประเภท บุคคลผู้ทำคุณประโยชน์ต่อเด็กและเยาวชน</option>
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
						<td>
							<input type="file" name="image" id="fileField" class="form-control" style="width:auto">
						</td>
					</tr>
					<tr>
						<th>เลขบัตรประชาชน <span class="Txt_red_12"> *</span>/ ชื่อ-สกุล<span class="Txt_red_12"> *</span></th>
						<td>
							<div class="form-inline">
								<input name="id_card" type="text" class="form-control fidcard" value="" style="width:200px;" placeholder="เลขบัตรประชาชน" />
								<input name="fullname" type="text" class="form-control" value="" style="width:300px;" placeholder="ชื่อและนามสกุล" />
							</div>
						</td>
					</tr>
					<tr>
						<th>วันเดือนปีเกิด <span class="Txt_red_12"> *</span></th>
						<td>
							<div class="form-inline">
								<input name="birthdate" type="text" class="form-control fdate datepicker" value="" style="width:120px;" />
								(อายุ xx ปี)
							</div>
						</td>
					</tr>
					<tr>
						<th>ที่อยู่<span class="Txt_red_12"> *</span></th>
						<td><input name="address" type="text" class="form-control" value="" placeholder="บ้านเลขที่ หมู่ ซอย ถนน" style="width:500px; margin-bottom:5px;" />
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

								<input name="postcode" type="text" class="form-control" placeholder="รหัสไปรษณีย์" style="width:120px;" value="" maxlength="5" />
							</div>
						</td>
					</tr>
					<tr>
						<th>โทรศัพท์ / มือถือ<span class="Txt_red_12"> *</span></th>
						<td>
							<div class="form-inline">
								<input name="tel" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรศัพท์" />/
								<input name="mobile" type="text" class="form-control" value="" style="width:250px;" placeholder="มือถือ" />
							</div>
						</td>
					</tr>
					<tr>
						<th>โทรสาร / อีเมล์<span class="Txt_red_12"> *</span></th>
						<td>
							<div class="form-inline">
								<input name="fax" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรสาร" />/
								<input name="email" type="text" class="form-control" value="" style="width:250px;" placeholder="อีเมล์" />
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
								<input name="f_id_card" type="text" class="form-control fidcard" value="" style="width:200px;" placeholder="เลขบัตรประชาชน บิดา" />
								<input name="f_fullname" type="text" class="form-control" value="" style="width:300px;" placeholder="ชื่อและนามสกุล บิดา" />
							</div>
						</td>
					</tr>
					<tr>
						<th>โทรศัพท์/มือถือ (บิดา)</th>
						<td>
							<input name="f_tel" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ บิดา" />
						</td>
					</tr>
					<tr>
						<th>เลขบัตรประชาชน / ชื่อ-สกุล (มารดา)<span class="Txt_red_12"> *</span></th>
						<td>
							<div class="form-inline">
								<input name="m_id_card" type="text" class="form-control fidcard" value="" style="width:200px;" placeholder="เลขบัตรประชาชน มารดา" />
								<input name="m_fullname" type="text" class="form-control" value="" style="width:300px;" placeholder="ชื่อและนามสกุล มารดา" />
							</div>
						</td>
					</tr>
					<tr>
						<th>โทรศัพท์/มือถือ (มารดา)</th>
						<td>
							<input name="m_tel" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ มารดา" />
						</td>
					</tr>
					<tr>
						<th>เลขบัตรประชาชน / ชื่อ-สกุล (ผู้ปกครอง)</th>
						<td>
							<div class="form-inline">
								<input name="p_id_card" type="text" class="form-control fidcard" value="" style="width:200px;" placeholder="เลขบัตรประชาชน ผู้ปกครอง" />
								<input name="p_fullname" type="text" class="form-control" value="" style="width:300px;" placeholder="ชื่อและนามสกุล ผู้ปกครอง" />
							</div>
						</td>
					</tr>
					<tr>
						<th>โทรศัพท์/มือถือ (ผู้ปกครอง)</th>
						<td>
							<input name="p_tel" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ ผู้ปกครอง" />
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
								<input name="r_id_card" type="text" class="form-control fidcard" value="" style="width:200px;" placeholder="เลขบัตรประชาชน" />
								<input name="r_fullname" type="text" class="form-control" value="" style="width:300px;" placeholder="ชื่อและนามสกุล" />
							</div>
						</td>
					</tr>
					<tr>
						<th>โทรศัพท์/มือถือ</th>
						<td>
							<input name="r_tel" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ ผู้ปกครอง" />
						</td>
					</tr>
					<tr>
						<th>โทรสาร / อีเมล์</th>
						<td>
							<div class="form-inline">
								<input name="r_fax" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรสาร" />/
								<input name="r_email" type="text" class="form-control" value="" style="width:250px;" placeholder="อีเมล์" />
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
									<option value="1">มัธยมศึกษาปีที่ 1</option>
									<option value="2">มัธยมศึกษาปีที่ 2</option>
									<option value="3">มัธยมศึกษาปีที่ 3</option>
									<option value="4">มัธยมศึกษาปีที่ 4 / ปวช. ปีที่ 1</option>
									<option value="5">มัธยมศึกษาปีที่ 5 / ปวช. ปีที่ 2</option>
									<option value="6">มัธยมศึกษาปีที่ 6 / / ปวช. ปีที่ 3</option>
									<option value="7">บัณฑิตปี 1 (ปริญญาตรี) / ปวส. ปีที่ 1</option>
									<option value="8">บัณฑิตปี 2 (ปริญญาตรี) / ปวส. ปีที่ 2</option>
									<option value="9">บัณฑิตปี 3 (ปริญญาตรี)</option>
									<option value="10">บัณฑิตปี 4 (ปริญญาตรี)</option>
									<option value="11">มหาบัณฑิต (ปริญญาโท)</option>
								</select>
								<input name="studying_name" type="text" class="form-control" value="" style="width:300px;" placeholder="ชื่อสถานศึกษา" />
							</div>
						</td>
					</tr>
					<tr>
						<th>จบการศึกษา</th>
						<td>
							<div class="form-inline">
								<select name="graduate_type" class="form-control" style="width:auto">
									<option value="1">มัธยมศึกษาปีที่ 1</option>
									<option value="2">มัธยมศึกษาปีที่ 2</option>
									<option value="3">มัธยมศึกษาปีที่ 3</option>
									<option value="4">มัธยมศึกษาปีที่ 4 / ปวช. ปีที่ 1</option>
									<option value="5">มัธยมศึกษาปีที่ 5 / ปวช. ปีที่ 2</option>
									<option value="6">มัธยมศึกษาปีที่ 6 / / ปวช. ปีที่ 3</option>
									<option value="7">บัณฑิตปี 1 (ปริญญาตรี) / ปวส. ปีที่ 1</option>
									<option value="8">บัณฑิตปี 2 (ปริญญาตรี) / ปวส. ปีที่ 2</option>
									<option value="9">บัณฑิตปี 3 (ปริญญาตรี)</option>
									<option value="10">บัณฑิตปี 4 (ปริญญาตรี)</option>
									<option value="11">มหาบัณฑิต (ปริญญาโท)</option>
								</select>
								<input name="graduate_name" type="text" class="form-control" value="" style="width:300px;" placeholder="ชื่อสถานศึกษา" /></div>
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
						<th><span class="txt4"></span> <span class="Txt_red_12"> *</span></th>
						<td>
							<input type="file" name="g_image" class="form-control" style="width:auto">
						</td>
					</tr>
					<tr>
						<th><span class="txt1"></span><span class="Txt_red_12"> *</span></th>
						<td><input name="g_name" type="text" class="form-control" value="<?php echo @$rs->g_name?>" style="width:500px;"
							 placeholder="ชื่อกลุ่ม" /></td>
					</tr>
					<tr>
						<th>พ.ศ.ที่ก่อตั้ง / <span class="txt2"></span><span class="Txt_red_12"> *</span></th>
						<td>
							<div class="form-inline">
								<select name="g_create" class="form-control" style="width:auto">
									<option>2560</option>
									<option>2559</option>
									<option>2558</option>
								</select> /
								<input name="g_age" type="text" class="form-control" placeholder="อายุกลุ่ม" style="width:80px;" value=""
								 maxlength="3" /> ปี
							</div>
						</td>
					</tr>
					<tr>
						<th>สถานที่ติดต่อ <span class="Txt_red_12"> *</span></th>
						<td><input name="g_address" type="text" class="form-control" value="" placeholder="บ้านเลขที่ หมู่ ซอย ถนน" style="width:500px; margin-bottom:5px;" />
							<div class="form-inline">

								<?php echo form_dropdown('g_province_id', get_option('id','name','st_provinces order by name asc'), '','class="selectpicker province" data-live-search="true" data-size="7" title="เลือกจังหวัด"');?>

								<span class="spang_District">
									<select name="g_district_id" class="selectpicker" data-live-search="true" title="เลือกอำเภอ" disabled="disabled">
										<option>--</option>
									</select>
								</span>

								<span class="spang_Subdistrict">
									<select name="g_subdistrict_id" class="selectpicker" data-live-search="true" title="เลือกตำบล" disabled="disabled">
										<option>--</option>
									</select>
								</span>

								<input name="g_postcode" type="text" class="form-control" placeholder="รหัสไปรษณีย์" style="width:120px;" value=""
								 maxlength="5" />
							</div>
						</td>
					</tr>
					<tr>
						<th>โทรศัพท์ / มือถือ<span class="Txt_red_12"> *</span></th>
						<td>
							<div class="form-inline">
								<input name="g_tel" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรศัพท์" />/
								<input name="g_mobile" type="text" class="form-control" value="" style="width:250px;" placeholder="มือถือ" />
							</div>
						</td>
					</tr>
					<tr>
						<th>โทรสาร / อีเมล์<span class="Txt_red_12"> *</span></th>
						<td>
							<div class="form-inline">
								<input name="g_fax" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรสาร" />/
								<input name="g_email" type="text" class="form-control" value="" style="width:250px;" placeholder="อีเมล์" />
							</div>
						</td>
					</tr>
				</table>
			</fieldset>

			<fieldset>
				<legend>ข้อมูล<span class="txt3"></span> และบุคคลอ้างอิง</legend>
				<table class="tbRegister">
					<tr>
						<th>เลขบัตรประชาชน / ชื่อ-สกุล (<span class="txt3"></span>)<span class="Txt_red_12"> *</span></th>
						<td>
							<div class="form-inline">
								<input name="gp_id_card" type="text" class="form-control fidcard" value="" style="width:200px;" placeholder="เลขบัตรประชาชน ประธานกลุ่ม" />
								<input name="gp_fullname" type="text" class="form-control" value="" style="width:300px;" placeholder="ชื่อและนามสกุล ประธานกลุ่ม" />
							</div>
						</td>
					</tr>
					<tr>
						<th>โทรศัพท์/มือถือ (<span class="txt3"></span>)<span class="Txt_red_12"> *</span></th>
						<td>
							<input name="gp_tel" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ ประธานกลุ่ม" />
						</td>
					</tr>
					<tr>
						<th>เลขบัตรประชาชน / ชื่อ-สกุล (บุคคลอ้างอิง)</th>
						<td>
							<div class="form-inline">
								<input name="gpr_id_card" type="text" class="form-control fidcard" value="" style="width:200px;" placeholder="เลขบัตรประชาชน บุคคลอ้างอิง" />
								<input name="gpr_fullname" type="text" class="form-control" value="" style="width:300px;" placeholder="ชื่อและนามสกุล บุคคลอ้างอิง" />
							</div>
						</td>
					</tr>
					<tr>
						<th>โทรศัพท์/มือถือ (บุคคลอ้างอิง)</th>
						<td>
							<input name="gpr_tel" type="text" class="form-control" value="" style="width:250px;" placeholder="โทรศัพท์/มือถือ บุคคลอ้างอิง" />
						</td>
					</tr>
				</table>
			</fieldset>

			<fieldset class="clear">
				<legend>อื่นๆ</legend>
				<table class="tbRegister">
					<tr>
						<th>ประวัติการก่อตั้ง (โดยสรุป)</th>
						<td><textarea name="g_history" cols="" rows="" class="form-control"></textarea>
						</td>
					</tr>
					<tr>
						<th>วัตถุประสงค์/ภารกิจการดำเนินงาน </th>
						<td>
							<textarea name="g_objective" cols="" rows="" class="form-control"></textarea>
						</td>
					</tr>
					<tr>
						<th>ลักษณะของกลุ่ม / องค์กร/หน่วยงาน </th>
						<td>
							<div>
								<input name="g_nature_type" type="radio" value="1"> เป็นกลุ่มองค์กรอิสระไม่สังกัดหน่วยงานใด ๆ
							</div>
							<div class="form-inline">
								<input name="g_nature_type" type="radio" value="2"> เป็นกลุ่ม/องค์กร/สังกัดหน่วยงาน
								<input name="g_nature_name" type="text" class="form-control" value="" style="width:350px;" placeholder="ระบุชื่อหน่วยงาน" /></div>
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
							<div class="form-inline" style="margin-bottom:5px;"><input name="g_member_count" type="text" class="form-control"
								 value="" style="width:80px;" placeholder="จำนวน" /> คน</div>
							<textarea name="g_member_detail" cols="" rows="" class="form-control" placeholder="กรุณาแนบรายชื่อ"></textarea>
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
							<input name="owner" type="text" class="form-control" value="" style="width:300px;" placeholder="ชื่อเจ้าของผลงาน" />
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
								<input name="contributor_name" type="text" class="form-control" id="textarea2" value="" style="width:300px;"
								 placeholder="ชื่อและนามสกุล" />
								<input name="contributor_position" type="text" class="form-control" id="textarea5" value="" style="width:300px;"
								 placeholder="ตำแหน่ง" />
								<input name="contributor_aff" type="text" class="form-control" id="textarea6" value="" style="width:300px;"
								 placeholder="สังกัด" />
								<input name="contributor_tel" type="text" class="form-control" id="textarea10" value="" style="width:300px;"
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
	$(document).ready(function () {

		// select จังหวัด หา อำเภอ
		$(document).on('change', "select[name=province_id]", function () {
			var province_id = $(this).val();
			var district_name = 'district_id';
			var district_element = $('.spanDistrict');
			AjaxSelectDistrict(province_id, district_name, district_element);

			// disable all child Element
			$('.spanSubdistrict').find('select').val('เลือกตำบล');
			$('.spanSubdistrict').find('select').prop('disabled', true);
			$('.spanSubdistrict').find('select').selectpicker('refresh');
		});

		// select อำเภอ หา ตำบล
		$(document).on('change', "select[name=district_id]", function () {
			var province_id = $('select[name=province_id]').val();
			var district_id = $(this).val();
			var subdistrict_name = 'subdistrict_id';
			var subdistrict_element = $('.spanSubdistrict');
			AjaxSelectSubdistrict(province_id, district_id, subdistrict_name, subdistrict_element);
		});


		// select จังหวัด หา อำเภอ {{กลุ่ม}}
		$(document).on('change', "select[name=g_province_id]", function () {
			var province_id = $(this).val();
			var district_name = 'g_district_id';
			var district_element = $('.spang_District');
			AjaxSelectDistrict(province_id, district_name, district_element);

			// disable all child Element
			$('.spang_Subdistrict').find('select').val('เลือกตำบล');
			$('.spang_Subdistrict').find('select').prop('disabled', true);
			$('.spang_Subdistrict').find('select').selectpicker('refresh');
		});

		// select อำเภอ หา ตำบล {{กลุ่ม}}
		$(document).on('change', "select[name=g_district_id]", function () {
			var province_id = $('select[name=g_province_id]').val();
			var district_id = $(this).val();
			var subdistrict_name = 'g_subdistrict_id';
			var subdistrict_element = $('.spang_Subdistrict');
			AjaxSelectSubdistrict(province_id, district_id, subdistrict_name, subdistrict_element);
		});

	});


	// เลือกจังหวัด แสดงอำเภอ
	function AjaxSelectDistrict($province_id, $district_name, $district_element) {
		if ($province_id == "") {
			$district_element.find('select').val('').attr("disabled", true);
			$district_element.find('select').selectpicker('refresh');
		} else {
			$.get('ajax/ajaxselectdistrict', {
				'province_id': $province_id,
				'district_name': $district_name,
			}, function (data) {
				$district_element.html(data);
				$district_element.find('select option:contains("เลือกอำเภอ")').text('+ เลือกอำเภอ +');
				$district_element.find('select').selectpicker('refresh');
			});
		}
	}

	// เลือกอำเภอ แสดงตำบล
	function AjaxSelectSubdistrict($province_id, $district_id, $sudistrict_name, $subdistrict_element) {
		if ($district_id == "") {
			$subdistrict_element.find('select').val('').attr("disabled", true);
			$subdistrict_element.find('select').selectpicker('refresh');
		} else {
			$.get('ajax/ajaxselectsubdistrict', {
				'province_id': $province_id,
				'district_id': $district_id,
				'subdistrict_name': $sudistrict_name,
			}, function (data) {
				$subdistrict_element.html(data);
				$subdistrict_element.find('select option:contains("เลือกตำบล")').text('+ เลือกตำบล +');
				$subdistrict_element.find('select').selectpicker('refresh');
			});
		}
	}
</script>

<script type="text/javascript">
	// $.validator.setDefaults( {
	//   submitHandler: function () {
	//     alert( "submitted!" );
	//   }
	// } );

	$(document).ready(function () {
		$("#regisFrm").validate({
			rules: {
				image: "required",
				id_card: "required",
				fullname: "required",
				birthdate: "required",
				address: "required",
				province_id: "required",
				district_id: "required",
				subdistrict_id: "required",
				postcode: {
					required: true,
					number: true,
				},
				// tel: "required",
				mobile: "required",
				// fax: "required",
				email: "required",
				// f_id_card: "required",
				f_fullname: "required",
				// f_tel: "required",
				// m_id_card: "required",
				m_fullname: "required",
				// m_tel: "required",
				r_id_card: "required",
				r_fullname: "required",
				// r_tel: "required",
				owner: "required",
				contributor_name: "required",
				contributor_position: "required",
				contributor_aff: "required",
				contributor_tel: "required",
				g_name: "required",
				g_create: "required",
				g_age: "required",
				g_address: "required",
				g_province_id: "required",
				g_district_id: "required",
				g_subdistrict_id: "required",
				g_postcode: "required",
				g_tel: "required",
				g_mobile: "required",
				g_fax: "required",
				g_email: "required",
				gp_id_card: "required",
				gp_fullname: "required",
				gp_tel: "required",
			},
			messages: {
				image: "ห้ามเป็นค่าว่าง",
				id_card: "ห้ามเป็นค่าว่าง",
				fullname: "ห้ามเป็นค่าว่าง",
				birthdate: "ห้ามเป็นค่าว่าง",
				address: "ห้ามเป็นค่าว่าง",
				province_id: "ห้ามเป็นค่าว่าง",
				district_id: "ห้ามเป็นค่าว่าง",
				subdistrict_id: "ห้ามเป็นค่าว่าง",
				postcode: {
					required: 'ห้ามเป็นค่าว่าง',
					number: 'เป็นตัวเลขเท่านั้น',
				},
				// tel: "ห้ามเป็นค่าว่าง",
				mobile: "ห้ามเป็นค่าว่าง",
				// fax: "ห้ามเป็นค่าว่าง",
				email: "ห้ามเป็นค่าว่าง",
				// f_id_card: "ห้ามเป็นค่าว่าง",
				f_fullname: "ห้ามเป็นค่าว่าง",
				// f_tel: "ห้ามเป็นค่าว่าง",
				// m_id_card: "ห้ามเป็นค่าว่าง",
				m_fullname: "ห้ามเป็นค่าว่าง",
				// m_tel: "ห้ามเป็นค่าว่าง",
				r_id_card: "ห้ามเป็นค่าว่าง",
				r_fullname: "ห้ามเป็นค่าว่าง",
				// r_tel: "ห้ามเป็นค่าว่าง",
				owner: "ห้ามเป็นค่าว่าง",
				contributor_name: "ห้ามเป็นค่าว่าง",
				contributor_position: "ห้ามเป็นค่าว่าง",
				contributor_aff: "ห้ามเป็นค่าว่าง",
				contributor_tel: "ห้ามเป็นค่าว่าง",
				g_name: "ห้ามเป็นค่าว่าง",
				g_create: "ห้ามเป็นค่าว่าง",
				g_age: "ห้ามเป็นค่าว่าง",
				g_address: "ห้ามเป็นค่าว่าง",
				g_province_id: "ห้ามเป็นค่าว่าง",
				g_district_id: "ห้ามเป็นค่าว่าง",
				g_subdistrict_id: "ห้ามเป็นค่าว่าง",
				g_postcode: "ห้ามเป็นค่าว่าง",
				g_tel: "ห้ามเป็นค่าว่าง",
				g_mobile: "ห้ามเป็นค่าว่าง",
				g_fax: "ห้ามเป็นค่าว่าง",
				g_email: "ห้ามเป็นค่าว่าง",
				gp_id_card: "ห้ามเป็นค่าว่าง",
				gp_fullname: "ห้ามเป็นค่าว่าง",
				gp_tel: "ห้ามเป็นค่าว่าง",
			},
			errorElement: "em",
			errorPlacement: function (error, element) {
				// Add the `help-block` class to the error element
				error.addClass("help-block");

				if (element.prop("type") === "checkbox") {
					error.insertAfter(element.parent("label"));
				} else {
					error.insertAfter(element);
				}
			},
			highlight: function (element, errorClass, validClass) {
				$(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
			},
			unhighlight: function (element, errorClass, validClass) {
				$(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
			}
		});
	});
</script>

<style>
	.error,
	.has-error .checkbox,
	.has-error .checkbox-inline,
	.has-error .control-label,
	.has-error .help-block,
	.has-error .radio,
	.has-error .radio-inline,
	.has-error.checkbox label,
	.has-error.checkbox-inline label,
	.has-error.radio label,
	.has-error.radio-inline label {
		color: red;
	}

	i,
	cite,
	em,
	var,
	address,
	dfn {
		font-style: italic;
	}
</style>

<script>
	$(document).on('change', "select[name=type]", function () {
		var $type = $(this).val();
		if ($type == '3') {
			type3();
		} else if ($type == '4') {
			type4();
		}
	});

	function type3() {
		$('.txt1').text('ชื่อกลุ่ม');
		$('.txt2').text('อายุกลุ่ม');
		$('.txt3').text('ประธานกลุ่ม');
		$('.txt4').text('แนบไฟล์รูปประจำกลุ่ม / สัญลักษณ์');

		$('input[name=g_name]').attr('placeholder', 'ชื่อกลุ่ม');
		$('input[name=gp_id_card]').attr('placeholder', 'เลขบัตรประชาชน ประธานกลุ่ม');
		$('input[name=gp_fullname]').attr('placeholder', 'ชื่อและนามสกุล ประธานกลุ่ม');
		$('input[name=gp_tel]').attr('placeholder', 'โทรศัพท์/มือถือ ประธานกลุ่ม');
	}

	function type4() {
		$('.txt1').text('ชื่อองค์กร');
		$('.txt2').text('อายุองค์กร');
		$('.txt3').text('ผู้ก่อตั้ง');
		$('.txt4').text('แนบไฟล์รูปประจำองค์กร / สัญลักษณ์');

		$('input[name=g_name]').attr('placeholder', 'ชื่อองค์กร');
		$('input[name=gp_id_card]').attr('placeholder', 'เลขบัตรประชาชน ผู้ก่อตั้ง');
		$('input[name=gp_fullname]').attr('placeholder', 'ชื่อและนามสกุล ผู้ก่อตั้ง');
		$('input[name=gp_tel]').attr('placeholder', 'โทรศัพท์/มือถือ ผู้ก่อตั้ง');
	}
</script>