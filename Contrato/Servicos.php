<?php

class Servicos extends Contrato implements EmissorContrato{
    
    function emitirContrato(){
        echo 'emissao de contrato de servicos';
    }
}