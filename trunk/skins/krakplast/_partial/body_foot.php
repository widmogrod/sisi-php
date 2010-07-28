<?php
function licznikOdwiedzin() 
{
    $cookieKey               = 'licznik';
    $cookieIsCounted = (isset($_COOKIE[$cookieKey]) && $_COOKIE[$cookieKey] == 1);
    $cookieFilename  = dirname(__FILE__) . '/licznik.txt';

    // ile zliczono
    $visits = is_readable($cookieFilename)
            ? (!($visits = file_get_contents($cookieFilename)) ? -1 : $visits)
            : 1;

    // czy zliczony juz wczesniej
    if (!$cookieIsCounted) {
            // ustaw ze liczony na 24h
            setcookie($cookieKey, 1, time() + 60*60*24);
            // powiekszamy wizyty
            $visits += 1;
    }

    // zapis
    if (!file_put_contents($cookieFilename, $visits)) {
            print 'nie można zapisać licznika';
    } else {
            @chmod($cookieFilename, 0666);
    }

    // ile zliczono
    return $visits;
}

?>
<div id="foot" class="grid_16 clearfix small">
	<p>&copy; 2010 Krak-Plast. Projekt i wykonanie <a href="http://widmogrod.info" title="Tworzenie stron internetowych">widmogrod.info</a>.</p>
	<p>Odwiedzin: <?php print licznikOdwiedzin() ?></p>
</div>
