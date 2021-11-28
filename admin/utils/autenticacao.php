<?php

require_once('bd/admin.php');

session_start();

function login($usuario, $senha){
    $moderador = pegarModeradorPorCpf($usuario);

    if ($moderador == false || count($moderador) <= 0){
        echo ("<script>
            alert('Acesso negado, usuario ou senha inválidos !')
            window.location = 'login.php';
            </script>");
        exit;
    }

    if (md5($senha) != $moderador['senha_moderador']){
        echo ("<script>
            alert('Acesso negado, usuario ou senha inválidos !')
            window.location = 'login.php';
            </script>");
        exit;
    }

    $_SESSION['id'] = $moderador['id_moderador'];
    $_SESSION['classe'] = "admin";

    header('Location: gerenciamentoCategorias.php');
}

function logout(){
    unset($_SESSION['id']);
    unset($_SESSION['classe']);
    session_destroy();
    header('Location: login.php');
}

function verificarAutenticacao(){
    if(!isset($_SESSION['id']) || !isset($_SESSION['classe'])){
        header('Location: login.php');
    }

    if($_SESSION['classe'] != "admin"){
        header('Location: login.php');
    }
}
?>