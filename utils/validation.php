<?php

function imagem_eh_valida($imagem) {
  $informacoesNomeDaImagem = explode(".", $imagem["name"]);
  
  if (count($informacoesNomeDaImagem) < 2) {
    return false;
  }

  $nomeDaImagem = $informacoesNomeDaImagem[0];
  $extensaoDaImagem = strtolower($informacoesNomeDaImagem[1]);

  $extenssoesPermitidas = array("jpeg", "jpg", "png", "svg", "webp");

  if (!in_array($extensaoDaImagem, $extenssoesPermitidas)) {
    return false;
  }

  $tamanhoMaximoDoArquivo = 10 * 1000000;
  $tamanhoDoArquivo = $imagem["size"];

  if ($tamanhoDoArquivo > $tamanhoMaximoDoArquivo) {
    return false;
  }

  return true;
}

?>