<?php
class Pages
{
	protected $_activePageId;
	
	protected $_pages;
	
	protected $_pagePathname;
	
	/**
	 * @param string $pagePathname
	 */
	public function __construct($pagePathname) {
		if (!is_dir($pagePathname))
			throw new Exception(sprintf('Katalog z stronami nie istnieje "%s"', $pagePathname));
		
		$this->_pagePathname = rtrim((string)$pagePathname,'/');
	}

	public function setActivePageId($id) {
		$this->_activePageId = basename((string) $id);
	}
	
	public function getActivePageId() {
		return $this->_activePageId;
	}
	
	public function getPage($pageId = null) {
		if (null === $pageId)
			$pageId = $this->getActivePageId();

		$pageId = basename($pageId);
		$path = $this->_pagePathname . '/' . $pageId . '.php';

		if (!is_file($path)) {
			return;
		}

		ob_start();
		include $path;
		return ob_get_clean();
	}
}
