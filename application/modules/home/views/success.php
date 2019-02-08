<style>
.red{color:red;}
.wrap{border: 4px solid #4CAF50; border-radius: 25px; width:600px; margin:0 auto; padding:50px;}
</style>

<div style="padding-top: 150px; font-size:16px;">
    <div class="wrap">
        ระบบบันทึกข้อมูลเรียบร้อยแล้ว <br>
		<font color="orange">ท่านจะต้องส่งเอกสารผลงานฉบับสมบูรณ์ให้กับกรมกิจการเด็กและเยาวชน ภายใน 7 วัน คือวันที่ <?php echo DB2Date(date('Y-m-d', strtotime($rs->created. ' + 7 days')));?></font> 
		<br>
		ท่านสามารถตรวจสอบสถานะได้ที่ URL : <a href="<?php echo site_url('home/chkstatus?code='.@$rs->code); ?>"><?php echo site_url('home/chkstatus?code='.@$rs->code); ?></a>  <br>
		รหัสการตรวจสอบของท่าน คือ <font color="red"><?php echo @$rs->code?></font> 
    </div>
</div>