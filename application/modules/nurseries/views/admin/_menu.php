<style type="text/css">
#horri_menu{
	border-bottom:2px solid #0080C0;
}
#horri_menu ul li{
	float:left;
	padding:5px;
	background:#f4f4f4;
	border-right:1px solid #ddd;
}
#horri_menu ul li.active{
	background:#0080C0;
}
#horri_menu ul li.active a{
	color:#fff;
}
</style>
<div id="horri_menu">
    <ul>
        <li <?=($this->uri->segment(4)=="category_form")?"class='active'":"";?>><a href="nurseries/admin/nurseries/category_form">คำนำหน้า</a></li>
        <li <?=($this->uri->segment(4)=="estimate" or $this->uri->segment(4)=="estimate_form")?"class='active'":"";?>><a href="nurseries/admin/nurseries/estimate">รายชื่อศูนย์เด็กเล็ก</a></li>
    </ul>
	<br class="clear">
</div>
