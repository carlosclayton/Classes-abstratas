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
			return "Pessoa Física";
		}
		else{
			return "Pessoa Jurídica";
			$this->pessoas[]	=	$pessoa;			
		}
	}
}

?>