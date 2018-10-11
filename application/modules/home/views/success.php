<style>
.red{color:red;}
.wrap{border: 4px solid #4CAF50; border-radius: 25px; width:600px; margin:0 auto; padding:50px;}
</style>
<div style="padding-top: 150px;">
    <div class="wrap">
        ระบบบันทึกข้อมูลเรียบร้อยแล้ว รหัสการตรวจสอบของท่าน คือ <b class="red"><?php echo @$code?></b> 
        ท่านสามารถเช็คสถานะได้ที่ URL : <a href="<?php echo site_url('home/chkstatus?code='.@$code); ?>"><?php echo site_url('home/chkstatus?code='.@$code); ?></a>
    </div>
</div>