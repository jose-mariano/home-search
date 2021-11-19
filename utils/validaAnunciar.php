<?php 

function opcaoValido($opcao) {
    if(($opcao) != "alugar" && ($opcao) != "vender") {
        return array(
            "campoValido" => false,
            "msgErro" => "Para continuar, você precisa selecionar uma opção!"
        );
    }
    return array("campoValido" => true);   
}

function valorValido($valor) {
    if(empty($valor)) {
        return array(
            "campoValido" => false,
            "msgErro" => "Para continuar, você precisa definir um valor!"
        );
    }
    return array("campoValido" => true); 
}   

function cepValido($cep) {
    if(!is_numeric($cep)) {
        return array(
            "campoValido" => false,
            "msgErro" => "Para continuar, digite seu CEP utilizando apenas números!"
        );
    }
    if(strlen($cep) != 8) {
        return array(
            "campoValido" => false,
            "msgErro" => "Para continuar, digite seu CEP com exatos 8 números!"
        );
    } 
    return array("campoValido" => true);
}

function enderecoValido($endereco) {
    if(empty($endereco)) {
        return array(
            "campoValido" => false,
            "msgErro" => "Para continuar, você precisa digitar seu endereço!"
        );
    }
    if(strlen($endereco) > 100) {
        return array(
            "campoValido" => false,
            "msgErro" => "Para continuar, digite seu endereço utilizando no máximo 100 caracteres!"
        );
    } 
    return array("campoValido" => true);
}

?>