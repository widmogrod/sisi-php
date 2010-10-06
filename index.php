<?php
require_once 'config.php';
require_once 'functions.php';

require_once 'KontorX/Sisi.php';
$sisi = new KontorX_Sisi();

// domyslna konfiguracja
$sisi->setAction('Home');
$sisi->setResponse('Html');

$sisi->setOptions($_GET);                
$sisi->handle();