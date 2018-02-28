<?php 

namespace Ericktarzia;
use Rain\Tpl;

/**
* 
*/
class Page 
{

	private $tpl;
	private $options = [];
	private $defaults = [
	"data" => []
	];

	/**
	 * Class Constructor
	 */
	public function __construct($opts = array())
	{

		$this->options = array_merge($this->defaults, $opts);
		// config

		
		$config = array(
			"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"] . "/tchello/views/",
			"cache_dir"     => $_SERVER["DOCUMENT_ROOT"] . "/tchello/views-cache/",
			"debug"         => false // set to false to improve the speed
			);

		Tpl::configure( $config );

		$this->tpl = new Tpl;
		$this->setData($this->options['data']);

		$this->tpl->draw("com/header");
	}

	private function setData($data = array())
	{

		foreach ($data as $key => $value) {

			$this->tpl->assign($key, $value);
		}

	}

	public function setTpl($name, $data = array(), $returnHTML = false)
	{

		$this->setData($data);
		return $this->tpl->draw($name, $returnHTML);
		var_dump($data);

	}

	
	public function __destruct()
	{
		$this->tpl->draw("com/footer");
	}
}

?>