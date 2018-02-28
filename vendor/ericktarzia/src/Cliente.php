<?php 

namespace Ericktarzia;
use \Ericktarzia\DB\Sql;

/**
* 
*/
class Cliente
{
	private $id;
	private $nome;
	private $cpf;
	private $nascimento;


	/**
	 * Class Constructor
	 * @param    $id   
	 * @param    $nome   
	 * @param    $cpf   
	 * @param    $nascimento   
	 */
	public function __construct($id = "", $nome = "", $cpf = "", $nascimento = "")
	{
		$this->id = $id;
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->nascimento = $nascimento;
	}

	

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * @param mixed $nascimento
     *
     * @return self
     */
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;

        return $this;
    }

    public static function listAll()
    {
    	$sql = new Sql();
    	return $sql->select("SELECT * FROM cliente JOIN saldo WHere cliente.id = saldo.idcliente");
    }
}
 ?>