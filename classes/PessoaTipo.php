<?php

require 'PessoaJuridica.php';
require 'PessoaFisica.php';

class PessoaTipo {	
	protected $pessoas;	
	public function __construct(){
		$this->pessoas	=	array();			
	}
	
	public function getPessoa($pes){
		
		if($pes->getTipo() == 'PF' ){
			$this->pessoas[]	=	$pessoa;
			return "Pessoa F�sica";
		}
		else{
			return "Pessoa Jur�dica";
			$this->pessoas[]	=	$pessoa;			
		}
	}
}

?>