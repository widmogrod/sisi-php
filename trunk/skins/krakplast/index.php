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
				<a class="smore more red" href="oferta.html" >Skontaktuj się z nami &raquo;</a>
			</div>
			<?php
				$data = $this->getData();
				$page = $data['page'];
			?>
			<p class="display">Oferujemy najwyższej jakości wyroby ze stali, kamienia <br/>oraz wysokiej klasy automatykę do bram <br/><br/>
		</div>
	</div>

	<div id="content" class="clearfix">
		<div class="grid_16 clearfix">
			<?php
				print $page;
			?>
			<div class="see-more">
				<h3>Nasze produkty to...</h3>
				<a class="smore  more red" href="oferta.html" >Zobacz więcej &raquo;</a>
			</div>
			
			
			<ul id="mycarousel" class="jcarousel-skin-krakplast">
				<li><a href="bramy-kute.html">
			   		<img src="img/bramy-kute.jpg" alt="Bramy kute" />
					<span>Bramy kute</span></a></li>
				<li><a href="bramy-kute.html">
			   		<img src="img/balustrada-wewnetrzna.jpg" alt="Balustrady wewnętrzne" />
					<span>Balustrady wewnętrzne</span></a></li>
				<li><a href="bramy-kute.html">
			   		<img src="img/balustrady-zewnetrzne.jpg" alt="Balustrady zewnętrzne" />
					<span>Balustrady zewnętrzne</span></a></li>
				<li><a href="bramy-kute.html">
			   		<img src="img/kraty.jpg" alt="Kraty" />
					<span>Kraty</span></a></li>
				<li><a href="bramy-kute.html">
			   		<img src="img/bramy-kute.jpg" alt="Bramy kute" />
					<span>Bramy kute</span></a></li>
				<li><a href="bramy-kute.html">
			   		<img src="img/bramy-kute.jpg" alt="Bramy kute" />
					<span>Bramy kute</span></a></li>
			</ul>
		</div>
	</div>

	<div id="abstract" class="grid_16 clearfix small">
		<div class="grid_5 alpha">
			<div class="see-more">
				<h2><a href="wyroby-ze-stali.html" >Wyroby ze stali <em>...szlachetnego metalu, eleganckiego i trwałego.</em></a></h2>
				<a class="smore" href="wyroby-ze-stali.html" >zobacz więcej &raquo;</a>
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
				<h2><a href="wyroby-z-kamienia.html" >Wyroby z kamienia <em>...wysokiej klasy i jakości.</em></a></h2>
				<a class="smore" href="wyroby-z-kamienia.html" >zobacz więcej &raquo;</a>
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
				<h2><a href="automatyka-do-bram.html" >Automatyka do bram <em>... magicznie i wygodnie.</em></a></h2>
				<a class="smore " href="automatyka-do-bram.html" >zobacz więcej &raquo;</a>
			</div>
			<ul>
				<li>automatyka do bram przesuwnych;</li>
				<li>automatyka do bram skrzydłowych.</li>
			</ul>
			
			<div id="faq">
				<h3>Najczęściej zadawane pytania</h3>
				<ul>
					<li><a href="">Jak wygląda dostawa oraz montaż?</a></li>
					<li><a href="">Jaki jest czas realizacji?</a></li>
				</ul>
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
