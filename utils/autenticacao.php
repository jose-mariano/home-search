<?php

require_once('bd/anunciante.php');

session_start();

function login($cpf, $senha){
    $anunciante = pegarAnunciantePorCpf($cpf);

    if ($anunciante == null || count($anunciante) <= 0){
        echo ("<script>
            alert('Acesso negado, usuario ou senha inválidos !')
            window.location = 'login.php';
            </script>");
        exit;
    }

    if (md5($senha) != $anunciante['senha_anunciante']){
        echo ("<script>
            alert('Acesso negado, usuario ou senha inválidos !')
            window.location = 'login.php';
            </script>");
        exit;
    }

    $_SESSION['id'] = $anunciante['id_anunciante'];
    $_SESSION['classe'] = "anunciante";

    header('Location: anunciante.php');
}

function logout(){
    unset($_SESSION['id']);
    unset($_SESSION['classe']);
    session_destroy();
    header('Location: index.php');
}

function verificarAutenticacao(){
    if(!isset($_SESSION['id']) || !isset($_SESSION['classe'])){
        header('Location: login.php');
    }

    if($_SESSION['classe'] != "anunciante"){
        header('Location: login.php');
    }
}
?>