<?php
require_once 'Pessoa.php';
class PessoaJuridica extends Pessoa{
	// Implementaчуo do mщtodo abstrato da super classe
	public function  getTipo(){
		return 'PJ';
	}

}
?>