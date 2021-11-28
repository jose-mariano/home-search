<?php

require_once ('bd/anunciante.php');
require_once ('alerts.php');

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

function anuncianteEhValido($nome, $email, $senha, $confirmarSenha, $cpf, $celular) {
    if ($nome == "" && strlen($nome) > 100) {
        mensagemErro('Nome não pode ser vazio, nem ultrapassar 100 caracteres');
        return false;   
    }

    if ($email == "" && strlen($email) > 100) {
        mensagemErro('Email não pode ser vazio, nem ultrapassar 100 caracteres !');
        return false;   
    }

    if ($senha == "" && strlen($senha) > 35) {
        mensagemErro('Senha não pode ser vazio, nem ultrapassar 100 caracteres !');
        return false; 
    }

    if ($senha != $confirmarSenha) {
        mensagemErro('A senha e confirmar senha precisam ser iguais !');
        return false; 
    }

    if ($cpf == "" && strlen($cpf) > 11) {
        mensagemErro('CPF não pode ser vazio, nem ultrapassar 11 caracteres !');
        return false; 
    }

    if (pegarAnunciantePorCpf($cpf) != false) {
        mensagemErro('Um usuário já esta cadastrado com esse CPF !');
        return false;
    }

    if ($celular == "" && strlen($celular) != 11) {
        mensagemErro('Celular não pode ser vazio, informe o número com DDD !');
        return false; 
    }

    return true;
}

?>
