<?php

require 'PessoaTipo.php';
$p	=	new PessoaTipo();
echo $p->getPessoa(new PessoaJuridica());


?>