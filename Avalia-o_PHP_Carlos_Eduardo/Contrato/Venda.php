<?php

class Venda extends Contrato implements EmissorContrato{
    
    function emitirContrato(){
        echo 'emissao de contrato de venda';
    }
}