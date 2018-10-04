<h3>ผู้ใช้งาน</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
  <div class="col-xs-4">
    <input type="text" class="form-control " id="exampleInputName2" placeholder="ชื่อผู้ใช้งาน / อีเมล์">
  </div>
  <select name="" class="form-control" style="width:auto">
    <option>-- สำนัก/กอง --</option>
</select>
  <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>

  
</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มผู้ใช้งาน" value="เพิ่มผู้ใช้งาน" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-warning vtip" />
</div>

<div class="paginationTG">
	<ul>
    <li style="margin-right:10px;">หน้าที่</li>
	<li class="currentpage">1</li><li ><a href=''>2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li><a href="">5</a></li>
	<li><a href="">6</a></li>
	<li><a href="">7</a></li> . . . <li ><a href="">19</a></li>
	<li><a href="">20</a></li><li ><a href="">21</a></li>
	</ul>
</div>

<table class="tblist">
<tr>
  <th align="left">ลำดับ</th>
  <th align="left">ชื่อผู้ใช้งาน</th>
  <th align="left">อีเมล์</th>
  <th align="left">สำนัก/กอง</th>
  <th align="left">สิทธิ์การใช้งาน</th>
  <th align="left">เปิดใช้งาน</th>
  <th align="left">จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>นางวัญญา ประคำทอง</td>
  <td>wanya@finearts.go.th</td>
  <td>ศูนย์เทคโนโลยีสารสนเทศมรดกศิลปวัฒนธรรม</td>
  <td>SuperAdmin</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>นางสาวอรสรา สายบัว</td>
  <td class="odd cursor">arosara@finearts.go.th</td>
  <td class="odd cursor">สำนักวรรณกรรมและประวัติศาสตร์</td>
  <td class="odd cursor">Executive</td>
  <td class="odd cursor"><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>นายพนมบุตร จันทรโชติ</td>
  <td>panomboot@finearts.go.th</td>
  <td>สำนักพิพิธภัณฑสถานแห่งชาติ</td>
  <td><span class="odd cursor">User</span></td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td class="odd cursor"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>4</td>
  <td>นางสาวกนกอร ศักดาเดช</td>
  <td>kanokon@finearts.go.th</td>
  <td>สำนักหอสมุดแห่งชาติ</td>
  <td class="odd cursor">User</td>
  <td class="odd cursor"><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>5</td>
  <td class="odd">นายสตวัน ฮ่มซ้าย</td>
  <td class="odd">sattawan@finearts.go.th</td>
  <td class="odd">สำนักสถาปัตยกรรม</td>
  <td><span class="odd cursor">User</span></td>
  <td><span class="odd cursor"><img src="images/icon_checkbox.png" width="24" height="24" /></span></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
</table>

<div class="paginationTG">
	<ul>
    <li style="margin-right:10px;">หน้าที่</li>
	<li class="currentpage">1</li><li ><a href=''>2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li><a href="">5</a></li>
	<li><a href="">6</a></li>
	<li><a href="">7</a></li> . . . <li ><a href="">19</a></li>
	<li><a href="">20</a></li><li ><a href="">21</a></li>
  </ul>
</div>