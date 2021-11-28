<?php
    function salvarImagem ($imagem, $destino){
        $dataAtual = date('dmYHis');
        $dadosArquivo = explode(".", $imagem["name"]);
        $nomeArquivo = $dadosArquivo[0];
        $extensaoArquivo = $dadosArquivo[1];

        $novoNomeArquivo = md5($nomeArquivo . $dataAtual) . "." . $extensaoArquivo;
        if(move_uploaded_file($imagem["tmp_name"], "{$destino}/{$novoNomeArquivo}")){
            return "{$destino}/{$novoNomeArquivo}";
        };
    }
?>