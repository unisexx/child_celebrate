<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<base href="<?php echo base_url(); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		<?php echo $template['title'] ?>
	</title>
	<? include '_meta.php'?>
	<? include '_script.php'?>
	<?php echo $template['metadata']; ?>
<body>
<? include '_header.php'?>
<div id="page">

	<?php echo $template['body'] ?>

</div><!--page-->
<? include '_script_foot.php'?>
</body>
</html>