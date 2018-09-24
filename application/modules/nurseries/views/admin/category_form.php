<h1>ศูนย์เด็กเล็กปลอดโรค</h1>
<?php include "_menu.php";?>
<br>
<form id="frmnursery" method="post" action="nurseries/admin/nurseries/category_save/<?=$category->id?>">
    <div id="data">
        <fieldset style="border:1px dashed #ccc; padding:10px;">
        <legend style="padding:0 5px; font-size:14px; font-weight:700; color:#666;">คำนำหน้า</legend>
			<table class="tbchildform">
                 <tr>
                   <th>ประเภทศูนย์เด็กเล็ก<strong> <span class="TxtRed">*</span></strong></th>
                   <td><input type="text" name="title" value="<?=$category->title?>" id="textfield8" style="width:200px;" /><input type="submit" value=" บันทึก " style="margin-left:5px;"/></td>
                 </tr>
			</table>
          </fieldset>
	</div>
</form>
<br>
<table class="list">
<tr>
    <th>คำนำหน้า</th>
    <th width="100"></th>
</tr>
<?php foreach($categories as $row):?>
	<tr>
        <td><?=$row->title?></td>
        <td width="100">
        	<a href="nurseries/admin/nurseries/category_form/<?=$row->id?>" class="btn">แก้ไข</a>
        	<a href="nurseries/admin/nurseries/category_delete/<?=$row->id?>" class="btn" onclick="return(confirm('ยืนยันการลบข้อมูล'))" >ลบ</a>
        </td>
    </tr>
<?php endforeach;?>
</table>