<h1>ติดต่อสอบถาม</h1>
<table class="form2">
	<tr>
		<th>กลุ่มงาน: </th>
		<td><?php echo lang_decode($contact->group->name) ?></td>
	</tr>
	<tr>
		<th>ชื่อ-นามสกุล: </th>
		<td><?php echo $contact->name ?></td>
	</tr>
	<tr>
		<th>บริษัท: </th>
		<td><?php echo $contact->company ?></td>
	</tr>
	<tr>
		<th>อีเมล์: </th>
		<td><?php echo $contact->email ?></td>
	</tr>
	<tr>
		<th>โทรศัพท์: </th>
		<td><?php echo $contact->telephone ?></td>	
	</tr>
	<tr>
		<th>โทรสาร: </th>
		<td><?php echo $contact->fax ?></td>
	</tr>
	<tr>
		<th>เรื่องที่ติดต่อ: </th>
		<td><?php echo $contact->title ?></td>
	</tr>
	<tr>
		<th>รายละเอียด: </th>
		<td><?php echo nl2br($contact->detail) ?></td>
	</tr>
</table>