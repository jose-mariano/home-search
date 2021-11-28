<?php

require_once("bd/anuncio.php");
require_once("utils/autenticacao.php");

verificarAutenticacao();
$id_anunciante = $_SESSION['id'];

$idAnuncio = isset($_GET['id']) ? $_GET['id'] : "";

if ($idAnuncio != ""){
    excluirAnuncio($id_anunciante, $idAnuncio); 
}

?>