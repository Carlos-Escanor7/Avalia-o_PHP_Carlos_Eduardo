<?php
require_once('../Classes/Certidao.php');
require_once('../Classes/EmissorCertidao.php');

class Nascimento extends Certidao implements EmissorCertidao{

    public function __construct($numero,$nome,$declarante,$tipo,$data,$tabeliao,$cartorio)
    {
    parent::__construct($numero,$nome,$declarante,$tipo,$data,$tabeliao,$cartorio);
    }

    function emitirCertidao(){
        echo 'Emissao de certidao de nascimento';
    }
}

$n1 = new Nascimento(1, 'kadu','manoel','Nascimento',20/04/2020,'jose','cart1');

$n1->emitirCertidao();



