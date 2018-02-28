<?php 

/**
* 
*/
class ExercicioIII
{
	

	private $bitcoin = 35000;
	private $taxa = 0.5;
	private $valor = 5000;

	public function calcularTaxa($valorCompraEmBtc){

		return $this->converterBTCemBRL($valorCompraEmBtc) * $this->taxa;

	}

	private function converterBRLemBTC($valorBrl){
		
		$btc = $valorBrl/$this->bitcoin;
		return $btc;

	}

	private function converterBTCemBRL($valorBtc){

		$brl = $valorBtc*$this->bitcoin;
		return $brl;
	}

}

?>