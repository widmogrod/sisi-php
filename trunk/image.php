<?php
/*
        Skrypt odpowiada za tworzenie miniaturek zdjęć i zapisywanie ich w odpowiednich katalogach.
        Jego działanie jest sprzężone z .htaccess by ukryć działanie tego pliku!
*/

require_once "config.php";

/**
 * Filtering route 
 */
$_GET = array_map('urldecode', (array) $_GET);

$path = str_replace('..', '', @$_GET['path']);
$type = basename(@$_GET['type']);

// problem z polskimi znakami... np. "Ł" jest zamieniane na "a"
// dlatego takie rozwiązanie a nie basename!
// $file = basename(@$_GET['file']);
$file = end(explode('/',@$_GET['file']));

// Prepare
$basePath = dirname(__FILE__) . '/' . trim($path, '/') . '/';
$filePath = $basePath . $file;
$fileWrite = $type . '/' . $file;

require_once 'KontorX/Image/Resizer.php';
$resizer = new KontorX_Image_Resizer($images);
$resizer->setDirname($basePath);
$resizer->setFilename($file);
$resizer->setMultiType($type);

try {
    $image = $resizer->resize();
    // display
    $image->display();

    // save
    require_once 'KontorX/File/Write.php';
    $write = new KontorX_File_Write($images);
    $write->setBasedir($basePath);
    $write->write($fileWrite, $image->toString());
} catch (Exception $e) {
    header("HTTP/1.0 404 Not Found");
    print $e->getMessage();
}
