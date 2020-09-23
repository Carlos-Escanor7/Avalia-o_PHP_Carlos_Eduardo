<?php

class Compra extends Contrato implements EmissorContrato{
    
    
    function emitirContrato(){
        echo 'emissao de contrato de compra';
    }
}