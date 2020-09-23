<?php

class Propriedade extends Certidao implements EmissorCertidao
{

    function emitirCertidao()
    {
        echo 'Emissao de certidao de propriedade';
    }
}
