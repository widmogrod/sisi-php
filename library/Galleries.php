<?php
class Galleries 
{
	const GLOB_GALLERIES = '/*';
	const GLOB_IMAGES = '/*.{jpg,JPG,png,PNG,gif,GIF,jpeg,JPEG}';

	/**
	 * @var string
	 */
	protected $_galleriesPathname = null;
	
	 /**
	  * @var array
	  */
	 protected $_galleries = null;
	 
 	/**
	 * @var string
	 */
	protected $_activeId = null;
	
	/**
	 * @var Galleries
	 */
	protected static $_instance;

	/**
	 * @param string @galleriesPathname
	 */
	protected function __construct($galleriesPathname = null) {
		if (null === $galleriesPathname)
			$galleriesPathname = GALLERY_PATHNAME;

		if (!is_dir($galleriesPathname))
			throw new Exception(sprintf('Katalog z galeriami nie istnieje "%s"', $galleriesPathname));
		
		$this->_galleriesPathname = rtrim((string)$galleriesPathname,'/');
	}

	public static function getInstance() {
		if (null === self::$_instance) {
			self::$_instance = new self();
		}
		
		return self::$_instance;
	}

	/**
	 * Przygotuj wzorzec dla GLOB
	 * @param string $pattern
	 * @return string
	 */
	protected function _getGlobPattern($pattern) {
		return $this->_galleriesPathname . '/' . ltrim($pattern, '/');
	}

	/**
	 * Przygotuj relatywną ścieżke
	 * @param string $absolutePath
	 * @return string
	 */
	protected function _relativePath($absolutePath) {
		$path = str_replace($this->_galleriesPathname, '', $absolutePath);
		$path = str_replace('//', '/', $path);
		$path = ltrim($path, '/');
		return $path;
	}

	/**
	 * Ustaw ID aktualne galerii
	 * @param string $id
	 */
	public function setActiveId($id) {
		$this->_activeId = basename((string) $id);
		$this->_activeId = urlencode($this->_activeId);
	}

	/**
	 * Pobierz ID aktualne galerii
	 * @return string
	 */
	public function getActiveId() {
		if (!strlen($this->_activeId)) {
			$galleries = $this->getGalleries();
			$gallery = current($galleries);
    		$gallery = $gallery['id'];
    		
    		$this->_activeId = $gallery;
		}
		return urldecode($this->_activeId);
	}

	/**
	 * Pobierz wszystkie gallerie
	 * @return array
	 */
	public function getGalleries() {
		if (null === $this->_galleries) {
			$this->_galleries = array();
			
			$pattern = $this->_getGlobPattern(self::GLOB_GALLERIES);
			foreach(glob($pattern, GLOB_ONLYDIR) as $dir) {
				$name = basename($dir);
				
				if (!isset($this->_galleries[$name])) {
					$gallery = array(
						'id'   => $name,
						'name' => $name,
						'images' => array()
					);

					$this->_galleries[$name] = $gallery;
				}

				$images = $this->getImagesInfoFromPath($dir);
				
				$this->_galleries[$name]['images'] = array_merge($this->_galleries[$name]['images'], $images);
			}
		}

		return $this->_galleries;
	}

	/**
	 * Pobierz galerie o podanym ID
	 * @return array
	 */
	public function getGallery($galleryId = null) {
		if (null === $galleryId)
			$galleryId = $this->getActiveId();
			
		$galleries = $this->getGalleries();
		
		return (array_key_exists($galleryId, $galleries))
			? $galleries[$galleryId]
			: null;
	}

	/**
	 * Pobierz grafiki z galeri o podanym ID
	 * @return array
	 */
	public function getImages($galleryId = null) {
		if (null === $galleryId)
			$galleryId = $this->getActiveId();
			
		$galleries = $this->getGalleries();
		
		return (array_key_exists($galleryId, $galleries))
			? $galleries[$galleryId]['images']
			: null;
	}

	/**
	 * Wyszukaj grafiki w galerii
	 *
	 * @param string $galleryDir
	 * @return array
	 */
	public function getImagesInfoFromPath($galleryDir) {
		$info = array();

		foreach(glob($galleryDir . '/'. self::GLOB_IMAGES, GLOB_BRACE) as $file) {
			// problem z polskimi znakami... np. "Ł" jest zamieniane na "a"
			// dlatego takie rozwiązanie a nie basename!
			$id = end(explode('/',$file));
			$id = urlencode($id);
			
			// usunięcie rozszeżenia
			$name = explode('.', $id);
			array_pop($name);
			$name = implode('.', $name);
			$name = urldecode($name);
			
			
			
			$path = GALLERY_PATH . '/' . $this->_relativePath($file); // sciezka do pliku
			
			$info[] = array(
				'id' => $id,
				'name' => $name,
				'path' => $path,
				'relativePath' => dirname($path)
			);
		}

		return $info;
	}
}

