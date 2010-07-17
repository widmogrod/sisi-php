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

	<div id="motto" class="clearfix">
		<div class="grid_16 clearfix">
			<div class="see-more">
				<h2>O nas...</h2>
				<a class="smore more red" href="index.php?action=page&id=kontakt" >Skontaktuj się z nami &raquo;</a>
			</div>
			<p class="display">Oferujemy najwyższej jakości wyroby ze stali, kamienia <br/>oraz wysokiej klasy automatykę do bram </p>
		</div>
	</div>

	<div id="content" class="clearfix">
		<div class="grid_16 clearfix">
			<div class="see-more">
				<h3>Nasze produkty to...</h3>
				<a class="smore  more red" href="index.php?action=page&id=oferta" >Zobacz więcej &raquo;</a>
			</div>
			
			
			<ul id="mycarousel" class="jcarousel-skin-krakplast">
				<li><a href="index.php?action=products&id=Bramy kute">
			   		<?php print img_skin('img/bramy-kute.jpg','Bramy kute')?>
					<span>Bramy kute</span></a></li>
				<li><a href="index.php?action=products&id=Balustrady wewnętrzne">
					<?php print img_skin('img/balustrada-wewnetrzna.jpg','Balustrady wewnętrzne')?>
					<span>Balustrady wewnętrzne</span></a></li>
				<li><a href="index.php?action=products&id=Balustrady zewnętrzne">
					<?php print img_skin('img/balustrady-zewnetrzne.jpg','Balustrady zewnętrzne')?>
					<span>Balustrady zewnętrzne</span></a></li>
				<li><a href="index.php?action=products&id=Kraty">
					<?php print img_skin('img/kraty.jpg','Kraty')?>
					<span>Kraty</span></a></li>
					
				<li><a href="index.php?action=products&id=Kominek">
					<?php print img_skin('img/wyroby-z-kamienia-kominek.jpg','Kominek - wyroby z kamienia')?>
					<span>Kominek</span></a></li>
				<li><a href="index.php?action=products&id=Łazienka">
					<?php print img_skin('img/wyroby-z-kamienia-lazienka.jpg','Łazienka - wyroby z kamienia')?>
					<span>Łazienka</span></a></li>
				<li><a href="index.php?action=products&id=Kuchnia">
					<?php print img_skin('img/wyroby-z-kamienia-kuchnia.jpg','Kuchnia - wyroby z kamienia')?>
					<span>Kuchnia</span></a></li>
				<li><a href="index.php?action=products&id=Schody">
					<?php print img_skin('img/wyroby-z-kamienia-schody.jpg','Schody - wyroby z kamienia')?>
					<span>Schody</span></a></li>
				<li><a href="index.php?action=products&id=Parapet">
					<?php print img_skin('img/wyroby-z-kamienia-parapety-wewnetrzne.jpg','Parapety wewnętrzne - wyroby z kamienia')?>
					<span>Parapety wewnętrzne</span></a></li>
					
				<li><a href="index.php?action=products&id=Automatyka do bram">
					<?php print img_skin('img/automatyka-do-bram.jpg','Automatyka do bram')?>
					<span>Automatyka do bram</span></a></li>
					
					
				
			</ul>
		</div>
	</div>

	<div id="abstract" class="grid_16 clearfix small">
		<div class="grid_5 alpha">
			<div class="see-more">
				<h2><a href="index.php?action=page&id=oferta-wyroby-ze-stali" >Wyroby ze stali <em>...kute, cynkowane, malowane proszkowo.</em></a></h2>
				<a class="smore" href="index.php?action=page&id=oferta-wyroby-ze-stali" >zobacz więcej &raquo;</a>
			</div>
			
			<ul>
				<li>bramy kute;</li>
				<li>bramy przesuwne;</li>
				<li>furtki;</li>
				<li>ogrodzenia kute;</li>
				<li>balustrady wewnętrzne;</li>
				<li>balustrady zewnętrzne;</li>
				<li>kraty;</li>
				<li>meble kute;</li>
				<li>lampy;</li>
				<li>świeczniki;</li>
				<li>stojaki;</li>
				<li>elementy kute.</li>		
			</ul>
		</div>
		<div class="grid_5">
			<div class="see-more">
				<h2><a href="index.php?action=page&id=oferta-wyroby-z-kamienia" >Wyroby z kamienia <em>...wysokiej klasy i jakości.</em></a></h2>
				<a class="smore" href="index.php?action=page&id=oferta-wyroby-z-kamienia" >zobacz więcej &raquo;</a>
			</div>
			<ul>
				<li>posadzki;</li>
				<li>schody;</li>
				<li>blaty kuchenne;</li>
				<li>parapety z kamienia naturalnego</li>
				<li>parapety z aluminium, PCV i stal</li>	
			</ul>
		</div>
		<div class="grid_6 omega">
			<div class="see-more">
				<h2><a href="index.php?action=page&id=oferta-automatyka" >Automatyka do bram <em>... bezprzewodowo i wygodnie.</em></a></h2>
				<a class="smore " href="index.php?action=page&id=oferta-automatyka" >zobacz więcej &raquo;</a>
			</div>
			<ul>
				<li>automatyka do bram przesuwnych;</li>
				<li>automatyka do bram skrzydłowych.</li>
			</ul>
			
		</div>
	</div>

	<?php
		print partial('body_foot');
	?>	
</div>

<?php print js_skin('js/global.js')?>

</body>
</html>
