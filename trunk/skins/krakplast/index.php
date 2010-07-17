<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	print partial('html_head');
	
	// FancyBox
	print js_resource('js/jquery-1.4.2.min.js');
	print js_resource('js/fancybox/jquery.mousewheel-3.0.2.pack.js');
	print js_resource('js/fancybox/jquery.fancybox-1.3.1.js');
	print css_resource('js/fancybox/jquery.fancybox-1.3.1.css');
?>
<script type="text/javascript">
	$(document).ready(function() {
		$("a[rel=lightbox]").fancybox({
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'titlePosition' 	: 'over'
		});
	});
</script>
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
