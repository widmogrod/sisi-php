<?php
/**
 * @param string $name
 * @return string
 */
function partial($name)
{
	$name = basename($name);
	$partial = SKIN_PATHNAME . '/' . SKIN_NAME . '/_partial/' . $name . '.php';
	
	if (!is_file($partial))
		return spritf('<!-- partial(%s): nie istnieje-->', $name);

	ob_start();
        include $partial;

    return ob_get_clean();
}

/**
 * @param string $name
 * @return string
 */
function resource_path($name)
{
	$path = RESOURCES_PATH . '/' . $name;
	return $path;
}

/**
 * @param string $name
 * @return string
 */
function css_resource($name)
{
	$path = resource_path($name);
	$path = sprintf('<link href="%s" type="text/css" rel="stylesheet" />', $path);
	return $path;
}

/**
 * @param string $name
 * @return string
 */
function js_resource($name)
{
	$path = resource_path($name);
	$path = sprintf('<script type="text/javascript" src="%s"></script>', $path);
	return $path;
}



/**
 * @param string $name
 * @return string
 */
function skin_resource_path($name)
{
	$path = SKIN_PATH . '/' . SKIN_NAME . '/' . $name;
	return $path;
}

/**
 * @param string $name
 * @return string
 */
function css_skin($name)
{
	$path = skin_resource_path($name);
	$path = sprintf('<link href="%s" type="text/css" rel="stylesheet" />', $path);
	return $path;
}

/**
 * @param string $name
 * @return string
 */
function js_skin($name)
{
	$path = skin_resource_path($name);
	$path = sprintf('<script type="text/javascript" src="%s"></script>', $path);
	return $path;
}

/**
 * @param string $src
 * @param string $src
 * @param string $src
 * @return string
 */
function img_skin($src, $alt = null, $class = null)
{
	$path = skin_resource_path($src);
	$path = sprintf('<img src="%s" alt="%s" class="%s"></script>', $path, $alt, $class);
	return $path;
}



