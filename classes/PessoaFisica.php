<?php
require_once 'Pessoa.php';
class PessoaFisica extends Pessoa{
	// Implementa��o do m�todo abstrato da super classe	
	public function  getTipo(){
		return 'PF';
	}		
}