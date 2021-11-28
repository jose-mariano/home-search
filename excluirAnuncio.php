<?php

require_once("bd/anuncio.php");
require_once("utils/autenticacao.php");

verificarAutenticacao();

$idAnuncio = isset($_GET['id']) ? $_GET['id'] : "";

if ($idAnuncio != ""){
    excluirAnuncio(1, $idAnuncio); 
}

?>