<?php

abstract class Cartorio{
    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

}