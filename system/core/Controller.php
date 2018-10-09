<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
/**/

class Controller
{
	//Object View
	protected $view = NULL;

	//Object model
	protected $model = NULL;

	//Object library
	protected $library = NULL;

	//Object helper
	protected $helper = NULL;

	//Object config
	protected $config = NULL;

	/**
	 * *function construct
	 * * loader the library necessary
	 */
	public function __construct()
	{
		// Loader config
	    require_once PATH_SYSTEM . '/core/loader/Config_Loader.php';
	    $this->config   = new Config_Loader();
	    $this->config->load('config');

	     // Loader Library
	    require_once PATH_SYSTEM . '/core/loader/Library_Loader.php';
	    $this->library = new Library_Loader();

	     // Load Helper
	    require_once PATH_SYSTEM . '/core/loader/Helper_Loader.php';
	    $this->helper = new Helper_Loader();

	    // Load View
		require_once PATH_SYSTEM . '/core/loader/View_Loader.php';
		$this->view = new View_Loader();
	}

	
}

?>