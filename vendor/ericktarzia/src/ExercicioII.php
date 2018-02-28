<?php 

/**
* 
*/
class ExercicioII 
{
	
	public function calcularPorcentagem($numero, $porcentagem){

		return $numero - ($numero / 100 * $porcentagem);
	}

	public function conversao($valor = 120.00, $valorDolar = 3.24){

		return $valor * $valorDolar;
	}

	/**
	 * Variação porcentual
	 * @param type $vf // valor final
	 * @param type $vi // valor inicial
	 * @return $vp
	 */
	public function variacao($vf,$vi){
		return $vp = (($vf - $vi)/$vi)*100;
	}
}

?>