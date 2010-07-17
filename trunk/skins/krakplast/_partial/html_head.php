<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="MxQP3nYIIooyj3qQG7SSv4Uzq-l7In8vu7NPk4_60fE" />

<title>KRAK PLAST - Najwyższej jakości wyroby ze stali, kamienia oraz wysokiej klasy automatyka do bram!</title>
<meta name="keywords" content="KRAK PLAST - Najwyższej jakości wyroby ze stali, kamienia oraz wysokiej klasy automatyka do bram!" />
<meta name="description" content="KRAK PLAST - Najwyższej jakości wyroby ze stali, kamienia oraz wysokiej klasy automatyka do bram!" />

<link href='http://fonts.googleapis.com/css?family=Josefin+Sans+Std+Light' rel='stylesheet' type='text/css'>
<link href=' http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
<link href=' http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:regular,bold' rel='stylesheet' type='text/css'>
<link href=' http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT:italic' rel='stylesheet' type='text/css'>

<?php 
	print css_skin('css/global.css');
	
	print js_skin('js/jquery-1.4.2.min.js');
	print js_skin('js/jquery.jcarousel.min.js');
	print css_skin('js/jcarousel/krakplast/skin.css');
	
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
