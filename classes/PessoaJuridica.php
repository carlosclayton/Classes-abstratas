<?php
require_once 'Pessoa.php';
class PessoaJuridica extends Pessoa{
	// Implementa��o do m�todo abstrato da super classe
	public function  getTipo(){
		return 'PJ';
	}

}
?>