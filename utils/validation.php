<?php

function imagem_eh_valida($imagem) {
  $informacoesNomeDaImagem = explode(".", $imagem["name"]);
  
  if (count($informacoesNomeDaImagem) < 2) {
    return array(
      "campoValido" => false,
      "msgErro" => "Arquivo sem extensão!"
    );
  }

  $nomeDaImagem = $informacoesNomeDaImagem[0];
  $extensaoDaImagem = strtolower($informacoesNomeDaImagem[1]);

  $extenssoesPermitidas = array("jpeg", "jpg", "png", "svg", "webp");

  if (!in_array($extensaoDaImagem, $extenssoesPermitidas)) {
    return array(
      "campoValido" => false,
      "msgErro" => "Arquivo não suportado!"
    );
  }

  $mb = 10;
  $tamanhoMaximoDoArquivo = $mb * 1000000;
  $tamanhoDoArquivo = $imagem["size"];

  if ($tamanhoDoArquivo > $tamanhoMaximoDoArquivo) {
    return array(
      "campoValido" => false,
      "msgErro" => "Arquivo não pode exceder {$mb}MB!"
    );
  }

  return array("campoValido" => true);
}

?>