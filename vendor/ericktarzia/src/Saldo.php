<?php 
namespace Ericktarzia;
use \Ericktarzia\Cliente;
/**
* 
*/
class Saldo extends Cliente
{
	private $id;
	private $idCliente;
	private $saldo;
	private $moeda;


	/**
	 * Class Constructor
	 * @param    $id   
	 * @param    $idCliente   
	 * @param    $saldo   
	 * @param    $moeda   
	 */
	public function __construct($id = "", $idCliente = "", $saldo = "", $moeda = "")
	{
		$this->id = $id;
		$this->idCliente = $idCliente;
		$this->saldo = $saldo;
		$this->moeda = $moeda;
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
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $idCliente
     *
     * @return self
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     *
     * @return self
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMoeda()
    {
        return $this->moeda;
    }

    /**
     * @param mixed $moeda
     *
     * @return self
     */
    public function setMoeda($moeda)
    {
        $this->moeda = $moeda;

        return $this;
    }
}

 ?>