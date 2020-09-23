<?php

class Casamento extends Certidao implements EmissorCertidao
{

    function emitirCertidao()
    {
        echo 'Emissao de certidao de casamento';
    }
}
