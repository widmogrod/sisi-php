<?php
	$id = @$_GET['id'];
	$action = @$_GET['action'];
?>
<div id="head" class="clearfix">
	<h1 class="logo"><a href="index.php">KRAK <em>PLAST</em> <span>Jacek Zawada</span></a></h1>

	<ul class="navigation">
		<li class="<?php print ($action == 'home') ? 'active' : ''?>">
			<a href="index.php"><span>Strona główna</span></a></li>
		<li class="<?php print ($action == 'page' && $id == 'oferta') ? 'active' : ''?>">
			<a href="index.php?id=oferta"><span>Oferta</span></a></li>
		<li class="<?php print ($action == 'products') ? 'active' : ''?>">
			<a href="index.php?action=products"><span>Realizacje</span></a></li>
		<li class="<?php print ($action == 'page' && $id == 'zapytanie-ofertowe') ? 'active' : ''?>">
			<a href="index.php?id=zapytanie-ofertowe"><span>Zapytanie ofertowe </span></a></li>
		<li class="<?php print ($action == 'page' && $id == 'kontakt') ? 'active' : ''?>">
			<a href="index.php?id=kontakt"><span>Kontakt</span></a></li>
	</ul>
</div>
