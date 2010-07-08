<?php
/*
        Katalogi
*/

// Główny katalog aplikacji - ścieżka absolutna
defined('APP_PATHNAME') or define('APP_PATHNAME', dirname(__FILE__));

// Główny katalog z bibliotekami - ścieżka absolutna
defined('LIB_PATHNAME') or define('LIB_PATHNAME', APP_PATHNAME . '/library');

/*
	Zasoby, img.css
*/

// Katalog z zasobami (css,js,img,...) - ścieżka relatywna do głównego katalogu aplikacji
defined('RESOURCES_PATH') or define('RESOURCES_PATH', 'resources');

/*
        Skórki
*/

// Katalog z zasobami (css,js,img,...) dla skurek - ścieżka relatywna do głównego katalogu aplikacji
defined('SKIN_PATH') or define('SKIN_PATH', 'skins');

// Katalog z zasobami (css,js,img,...) - ścieżka relatywna do głównego katalogu aplikacji
defined('SKIN_PATHNAME') or define('SKIN_PATHNAME', APP_PATHNAME . '/'. SKIN_PATH);

// Nazwa skórki galerii
defined('SKIN_NAME') or define('SKIN_NAME', 'krakplast');


/*
	Galeria
*/

// Nazwa katalogu galerii (ścieżka relatywna do głównego katalogu aplikacji) 
// jest sprzężona z .htaccess dlatego wszelkie zmiany,
// musza być również w tym pliku uwzględnione!
defined('GALLERY_PATH') or define('GALLERY_PATH', 'galleries');

// Główny katalog z galeriami - ścieżka absolutna
defined('GALLERY_PATHNAME') or define('GALLERY_PATHNAME', APP_PATHNAME . '/' . GALLERY_PATH);


/*
	Produkty
*/

defined('PRODUCTS_PATH') or define('PRODUCTS_PATH', 'products');

defined('PRODUCTS_PATHNAME') or define('PRODUCTS_PATHNAME', APP_PATHNAME . '/' . PRODUCTS_PATH);


/*
        Rodzaje i rozmiary miniaturek
*/

$images = array(
        'chmod' => array(
                'DIR' => 0775,
                'FILE' => 0664,
        ),
        'forced' => true,
        'default' => array(
                'image' => ''
        ),
        'multiTypesOptions' => array(
                # To max width and height
                'mini' => array(
                        'type' => 'max',
                        'width' => 25,
                        'height' => 25
                ),
                'small' => array(
                        'type' => 'max',
                        'width' => 50,
                        'height' => 50
                ),
                'thumb' => array(
                        'type' => 'max',
                        'width' => 90,
                        'height' => 90
                ),
                'mediana' => array(
                        'type' => 'max',
                        'width' => 125,
                        'height' => 125
                ),
                'medium' => array(
                        'type' => 'max',
                        'width' => 160,
                        'height' => 160
                ),
                'big' => array(
                        'type' => 'max',
                        'width' => 250,
                        'height' => 250
                ),
                'preview' => array(
                        'type' => 'max',
                        'width' => 600,
                        'height' => 600
                ),
                'normal' => array(
                        'type' => 'max',
                        'width' => 800,
                        'height' => 800
                ),
                
                # To max width
                'mini_width' => array(
                        'type' => 'max',
                        'width' => 25
                ),
                'small_width' => array(
                        'type' => 'max',
                        'width' => 50
                ),
                'thumb_width' => array(
                        'type' => 'max',
                        'width' => 90
                ),
                'medium_width' => array(
                        'type' => 'max',
                        'width' => 160
                ),
                'big_width' => array(
                        'type' => 'max',
                        'width' => 250
                ),
                'preview_width' => array(
                        'type' => 'max',
                        'width' => 600
                ),
                'normal_width' => array(
                        'type' => 'max',
                        'width' => 800
                ),
                
                # Crop to square
                'mini_crop' => array(
                        'type' => 'max',
                        'width' => 50,
                        'chains' => array(
                                'max' => array(
                                        'type' => 'min',
                                        'width' => 25,
                                        'height' => 25
                                ),

                                'crop' => array(
                                        'type' => 'crop',
                                        'width' => 25,
                                        'height' => 25,
                                        'offsetWidth' => '50%',
                                        'offsetHeight' => '50%'
                                )
                        )
                ),
                'small_crop' => array(
                        'type' => 'max',
                        'width' => 100,
                        'chains' => array(
                                'max' => array(
                                        'type' => 'min',
                                        'width' => 50,
                                        'height' => 50
                                ),

                                'crop' => array(
                                        'type' => 'crop',
                                        'width' => 50,
                                        'height' => 50,
                                        'offsetWidth' => '50%',
                                        'offsetHeight' => '50%'
                                )
                        )
                ),
                'thumb_crop' => array(
                        'type' => 'max',
                        'width' => 160,
                        'chains' => array(
                                'max' => array(
                                        'type' => 'min',
                                        'width' => 90,
                                        'height' => 90
                                ),

                                'crop' => array(
                                        'type' => 'crop',
                                        'width' => 90,
                                        'height' => 90,
                                        'offsetWidth' => '50%',
                                        'offsetHeight' => '50%'
                                )
                        )
                ),
                'medium_crop' => array(
                        'type' => 'max',
                        'width' => 250,
                        'chains' => array(
                                'min' => array(
                                        'type' => 'min',
                                        'width' => 160,
                                        'height' => 160
                                ),

                                'crop' => array(
                                        'type' => 'crop',
                                        'width' => 160,
                                        'height' => 160,
                                        'offsetWidth' => '50%',
                                        'offsetHeight' => '50%'
                                )
                        )
                ),
                'big_crop' => array(
                        'type' => 'max',
                        'width' => 350,
                        'chains' => array(
                                'min' => array(
                                        'type' => 'min',
                                        'width' => 250,
                                        'height' => 250
                                ),

                                'crop' => array(
                                        'type' => 'crop',
                                        'width' => 250,
                                        'height' => 250,
                                        'offsetWidth' => '50%',
                                        'offsetHeight' => '50%'
                                )
                        )
                ),
                'bigger_crop' => array(
                        'type' => 'max',
                        'width' => 450,
                        'chains' => array(
                                'min' => array(
                                        'type' => 'min',
                                        'width' => 320,
                                        'height' => 320
                                ),

                                'crop' => array(
                                        'type' => 'crop',
                                        'width' => 320,
                                        'height' => 320,
                                        'offsetWidth' => '50%',
                                        'offsetHeight' => '50%'
                                )
                        )
                ),
                'preview_crop' => array(
                        'type' => 'max',
                        'width' => 700,
                        'chains' => array(
                                'min' => array(
                                        'type' => 'min',
                                        'width' => 600,
                                        'height' => 600
                                ),

                                'crop' => array(
                                        'type' => 'crop',
                                        'width' => 600,
                                        'height' => 600,
                                        'offsetWidth' => '50%',
                                        'offsetHeight' => '50%'
                                )
                        )
                ),
                'normal_crop' => array(
                        'type' => 'max',
                        'width' => 900,
                        'chains' => array(
                                'min' => array(
                                        'type' => 'min',
                                        'width' => 800,
                                        'height' => 800
                                ),

                                'crop' => array(
                                        'type' => 'crop',
                                        'width' => 800,
                                        'height' => 800,
                                        'offsetWidth' => '50%',
                                        'offsetHeight' => '50%'
                                )
                        )
                ),
                
                'polaroid'=> array(
                        'type' => 'max',
                        'width' => 250,
                        'chains' => array(
                                'min' => array(
                                        'type' => 'min',
                                        'width' => 170,
                                        'height' => 120
                                ),

                                'crop' => array(
                                        'type' => 'crop',
                                        'width' => 170,
                                        'height' => 120,
                                        'offsetWidth' => '50%',
                                        'offsetHeight' => '50%'
                                )
                        )
                ),
        )
);


/*
        Konfiguracja aplikacji
*/

set_include_path(implode(PATH_SEPARATOR, array(
	'/usr/share/php/Zend/trunk/',
	'/usr/share/php/KontorX/trunk',
    LIB_PATHNAME
)));

error_reporting(E_ALL);
ini_set('display_error',1);
