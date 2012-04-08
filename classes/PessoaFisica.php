<?php
require_once 'Pessoa.php';
class PessoaFisica extends Pessoa{
	// Implementaчуo do mщtodo abstrato da super classe	
	public function  getTipo(){
		return 'PF';
	}		
}