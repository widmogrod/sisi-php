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
			'titlePosition' 	: 'over',
			'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
				return '<span id="fancybox-title-over">Zdjęcie produktu ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
			}
		});
	});
</script>
</head>
<body class="index">
<div class="container_16 clearfix">

	<?php
		print partial('body_head');
		
		$data = $this->getData();
		
		$categories = $data['categories'];
		$category = $data['category'];
		$products = $category['products'];
		$activeId = $data['activeId'];
	?>

	<div id="motto" class="clearfix">
		<div class="grid_16 clearfix">
			<div class="see-more">
				<h2>Realizacje ...</h2>
				<a class="smore more red" href="index.php?action=page&id=kontakt" >Skontaktuj się z nami &raquo;</a>
			</div>
			<p class="display">rzeczywistniamy Państwa pomysły, aby mogły ujrzeć światło dzienne oraz zdobić Państwa otoczenie!</p>
		</div>
	</div>

	<div class="clearfix" id="asite">
		<div class="grid_4">
			<h3>Kategorie</h3>
			<?php if (count($categories)):?>
			<ul class="categories">
				<?php foreach($categories as $category): ?>
				<li class="<?php print ($activeId == $category['id']) ? 'active' : '' ?>">
					<a href="?action=products&id=<?php print $category['id']?>"><?php print $category['name']?></a></li>
				<?php endforeach; ?>
			</ul>
			<?php endif;?>
		</div>
		<div class="grid_12">
			<div id="main" class="clearfix">
				<?php if (count($products)):?>
				<ul class="products">
					<?php foreach($products as $product): ?>
					<li>
						<a rel="lightbox" 
							title="<?php print $product['name']?>" 
							href="<?php print $product['path'] . '/preview/' . $product['id']?>">
								<img src="<?php print $product['path'] . '/medium/' . $product['id']?>" alt="<?php print $product['name']?>" /></a>
						<span><?php print $product['name']?></span></li>
					<?php endforeach; ?>
				</ul>
				<?php else:?>
				<p>Wkrótce...</p>
				<?php endif;?>
			</div>
		</div>
	</div>

	<?php
		print partial('body_foot');
	?>	
</div>

<?php print js_skin('js/global.js')?>

</body>
</html>
