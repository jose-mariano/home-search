<?php 

function opcaoValido($opcao) {
    if(($opcao) != "alugar" && ($opcao) != "vender") {
        echo ("<span class='msgErro'>Selecione se deseja alugar ou vender!</span>");
        return false;
    } else {
        return true;
    }   
}

function valorValido($valor) {
    if(empty($valor)) {
        echo ("<span class='msgErro'>Digite o valor do imóvel!</span>");
        return false;
    } else {
        return true;
    }   
}

function cepValido($cep) {
    if(empty($cep)) {
        echo ("<span class='msgErro'>Digite o número do CEP!</span>");
        return false;
    } elseif(strlen($cep) != 8) {
        echo ("<span class='msgErro'>Digite o CEP com 8 números!</span>");
        return false;
    } else {
        return true;
    }
}

function enderecoValido($endereco) {
    if(empty($endereco)) {
        echo ("<span class='msgErro'>Digite o nome do logradouro!</span>");
        return false;
    } elseif(strlen($endereco) > 100) {
        echo ("<span class='msgErro'>Utilize até 100 caracteres!</span>");
        return false;
    } else {
        return true;
    }
}  

?>