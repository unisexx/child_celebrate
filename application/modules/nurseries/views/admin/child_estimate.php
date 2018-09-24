<h1>ศูนย์เด็กเล็กปลอดโรค</h1>
<?php include "_menu.php";?>
<br>

<script type="text/javascript">
$(document).ready(function(){
	$('input[type="checkbox"][name="status"]').change(function() {
	     if(this.checked) {
			$.post('nurseries/admin/nurseries/save_status',{
				'id' : $(this).next().val(),
				'status' : 1
			});
	     }else{
	     	$.post('nurseries/admin/nurseries/save_status',{
				'id' : $(this).next().val(),
				'status' : 0
			});
	     }
	});
	
	$("select[name=province_id]").live("change",function(){
		//$("<img class='loading' src='themes/bo/images/loading.gif' style='vertical-align:middle;'>").appendTo(".loadingicon");
		$.post('nurseries/admin/nurseries/get_amphur',{
				'province_id' : $(this).val()
			},function(data){
				$("#amphur").html(data);	
				//$('.loading').remove();
			});
	});
	
	$("select[name=amphur_id]").live("change",function(){
		//$("<img class='loading' src='themes/bo/images/loading.gif' style='vertical-align:middle;'>").appendTo(".loadingicon");
		$.post('nurseries/admin/nurseries/get_district',{
				'amphur_id' : $(this).val()
			},function(data){
				$("#district").html(data);	
				//$('.loading').remove();
			});
	});
});
</script>

	<div id="data">
    	<div style="font-size:14px; font-weight:700; padding-bottom:10px; color:#3C3">ส่งผลการประเมินโครงการศูนย์เด็กเล็กปลอดโรค</div>
    	
    <form method="get" action="nurseries/admin/nurseries/estimate">
    	<div style="padding:10px; border:1px solid #ccc; margin-bottom:10px;">ชื่อ <input name="name" type="text" value="<?=@$_GET['name']?>" style="width:280px;" />
       		<?php echo form_dropdown('province_id',get_option('id','name','provinces'),@$_GET['province_id'],'','--- เลือกจังหวัด ---') ?>
    	  <span id="amphur"><?=form_dropdown('amphur_id',get_option('id','amphur_name','amphures',''),@$_GET['amphur_id'],'','--- เลือกอำเภอ ---');?></span>
    	  <span id="district"><?=form_dropdown('district_id',get_option('id','district_name','districts',''),@$_GET['district_id'],'','--- เลือกตำบล ---');?></span>
    	  <?=form_dropdown('year',array('2554'=>'2554','2555'=>'2555'),@$_GET['year'],'','--- เลือกปี ---');?>
  	      <input type="submit" value=" ค้นหา ">
    	</div>
	</form>
    	
	<table class="list">
        <tr>
        <th>ลำดับ</th>
        <th>ชื่อศุนย์พัฒนาเด็กเล็ก</th>
        <th>ประเมิน</th>
        <th>ปีที่เข้าร่วม</th>
        <th></th>
        </tr>
        <?php $i=(@$_GET['page'] > 1)? (((@$_GET['page'])* 20)-20)+1:1;?>
        <?php foreach($nurseries as $key=>$nursery):?>
        	<tr>
		        <td><?=$i?></td>
		        <td><?=$nursery->name?></td>
		        <td>
		        	<input type="checkbox" name="status" value="<?=$nursery->status?>" <?=($nursery->status == 1)?"checked='checked'":"";?>>
		        	<input type="hidden" name="id" value="<?=$nursery->id?>">
		        </td>
		        <td><?=$nursery->year?></td>
		        <td><a class="btn" href="nurseries/admin/nurseries/estimate_form/<?=$nursery->id?>">รายละเอียด</a></td>
	        </tr>
	        <?php $i++;?>
		<?php endforeach;?>
	</table><br>
	<?=$nurseries->pagination();?>
	</div>