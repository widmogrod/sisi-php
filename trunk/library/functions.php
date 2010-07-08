<?php
/**
 * @param string $name
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
 */
function resource_path($name)
{
	$path = RESOURCES_PATH . '/' . $name;
	return $path;
}

/**
 * @param string $name
 */
function css_resource($name)
{
	$path = resource_path($name);
	$path = sprintf('<link href="%s" type="text/css" rel="stylesheet" />', $path);
	return $path;
}

/**
 * @param string $name
 */
function js_resource($name)
{
	$path = resource_path($name);
	$path = sprintf('<script type="text/javascript" src="%s"></script>', $path);
	return $path;
}



/**
 * @param string $name
 */
function skin_resource_path($name)
{
	$path = SKIN_PATH . '/' . SKIN_NAME . '/' . $name;
	return $path;
}

/**
 * @param string $name
 */
function css_skin($name)
{
	$path = skin_resource_path($name);
	$path = sprintf('<link href="%s" type="text/css" rel="stylesheet" />', $path);
	return $path;
}

/**
 * @param string $name
 */
function js_skin($name)
{
	$path = skin_resource_path($name);
	$path = sprintf('<script type="text/javascript" src="%s"></script>', $path);
	return $path;
}

/**
 * @param string $src
 */
function img_skin($src, $alt = null)
{
	$path = skin_resource_path($src);
	$path = sprintf('<img src="%s" alt="%s"></script>', $path, $alt);
	return $path;
}



