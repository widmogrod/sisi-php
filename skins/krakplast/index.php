<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	print partial('html_head');
?>
</head>
<body class="index">
<div class="container_16 clearfix">

	<?php
		print partial('body_head');
	?>
	
	<?php
		$data = $this->getData();
		$page = $data['page'];
	?>
	
	<?php
		print $page;
	?>

	<?php
		print partial('body_foot');
	?>	
</div>

<?php print js_skin('js/global.js')?>

</body>
</html>
