<?php

function cidade_eh_valida($cidade_anuncio)
{
    if(!is_string($cidade_anuncio))
    {
        return false;
    }

    if(strlen($cidade_anuncio) > 50)
    {
        return false;
    }
    
    return true;
}

?>
