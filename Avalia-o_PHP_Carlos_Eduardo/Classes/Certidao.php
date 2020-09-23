<?php

abstract class Certidao {
    private $numero;
    private $nome;
    private $declarante;
    private $tipo;
    private $data;
    private $tabeliao;
    private $cartorio;

    function __construct($numero,$nome,$declarante,$tipo,$data,$tabeliao,$cartorio)
    {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->declarante = $declarante;
        $this->tipo = $tipo;
        $this->data = $data;
        $this->tabeliao = $tabeliao;
        $this->cartorio = $cartorio;
    }

}