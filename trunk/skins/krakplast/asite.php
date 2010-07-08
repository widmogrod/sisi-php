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
		var_dump($this->getMessages());
		
		$data = $this->getData();
		
		$categories = $data['categories'];
		$category = $data['category'];
		$products = $category['products'];
	?>
	<pre>
	<?php //print_r($data);?>
	</pre>

	<div id="motto" class="clearfix">
		<div class="grid_16 clearfix">
			<div class="see-more">
				<h2>Realizacje ...</h2>
			</div>
			<p class="display">Bardzo bardzo dobrze! Fantastycznie, magicznie poprostu super!</p>
		</div>
	</div>

	<div id="content" class="clearfix">
		<div class="grid_4" id="asite">
			<h3>Kategorie</h3>
			<?php if (count($categories)):?>
			<ul class="categories">
				<?php foreach($categories as $category): ?>
				<li><a href="?category=<?php print $category['id']?>"><?php print $category['name']?></a></li>
				<?php endforeach; ?>
			</ul>
			<?php endif;?>
		</div>
		<div class="grid_12">
			<?php if (count($categories)):?>
			<ul class="products">
				<?php foreach($products as $product): ?>
				<li>
					<a href="<?php print $product['path'] . '/' . $product['id']?>" rel="lightbox"><img src="<?php print $product['path'] . '/medium/' . $product['id']?>"/></a>
					<span><?php print $product['name']?></span></li>
				<?php endforeach; ?>
			</ul>
			<?php endif;?>
		</div>
	</div>

	<?php
		print partial('body_foot');
	?>	
</div>

<?php print js_skin('js/global.js')?>

</body>
</html>
