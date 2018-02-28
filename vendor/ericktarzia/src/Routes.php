<?php 

namespace Ericktarzia;
use \Slim\Slim;
use Ericktarzia\Page;
use Ericktarzia\Cliente;
use Ericktarzia\DB\Sql;



/**
* 
*/
class Routes
{
	private $cliente;
	private $sql;
	private $app;
	public function __construct()
	{
		$this->app = new Slim();
		$this->app->config('debug', false);


		$this->cliente = new Cliente();
		$this->sql = new Sql;
	}

	private function listaClientes()
	{
		//return $this->sql->select();
	}

	public function startPage()
	{
		$this->app->get("/",function(){
			$page = new Page();
			$page->setTpl("content/index");

		});

		$this->app->get("/index",function(){
			$page = new Page();
			$page->setTpl("content/index");
		});

		//rota clientes
		$this->app->get("/clientes",function(){

			$clients = Cliente::listAll();
			$page = new Page();
			$page->setTpl("content/clientes", array(
				'clientes' => $clients
				));

		});

			//rota clientes
		$this->app->get("/clientes_json",function(){

			$clients = Cliente::listAll();
			$page = new Page();
			echo json_encode($clients);
			
			
		});

		//rota exercicio 2
		$this->app->get("/exercicio2",function(){
			$page = new Page();
			$page->setTpl("content/exercicio2");
		});

		//rota exercicio 3
		$this->app->get("/exercicio3",function(){
			$page = new Page();
			$page->setTpl("content/exercicio3");
		});

		
	}

	public function __destruct()
	{
		$this->app->run();
	}
}

?>