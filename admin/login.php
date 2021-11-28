<?php

require_once('utils/autenticacao.php');
require_once('bd/admin.php');

$cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "" ;
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "" ;

if($cpf != "" && $senha != "") {
    login($cpf, $senha);
}

?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel do administrador</title>

    <link rel="stylesheet" href="../public/css/admin_login.css">

</head>

<body>

    <form class="form" action="login.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="../public/img/engrenagem.png" alt="">
                <h2 class="title">Painel do administrador</h2>
            </div>

            <div class="card-group">
                <label>CPF</label>
            <input type="text" name="cpf" placeholder="CPF" maxlength="11" required>      
            </div>

            <div class="card-group">
                <label>Senha</label>
            <input type="password" name="senha" placeholder="Senha" required>      
            </div>

                
            <div class="card-group btn">
                
                <button type="submit">ACESSAR</button>    
            </div>

            <body link="grey">

        </div>
    </form>

</body>

</html>