<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="icon" href="public/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="public/css/loginAnunciante.css">

</head>
<body class="bg-gray-300">
    <!-- HEADER -->
    <header>
        <div class="flex flex-1 relative bg-gray-700 w-full h-24">
            <!-- LOGO -->
            <div>
                <a href="index.php">
                    <img src="public/img/logo.png" alt="Logo Homesearch" class="w-70 ml-4 mt-5">
                </a>
            </div>
        </div>
    </header>
    <!-- LOGIN -->
    <form class="form" action="#">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="public/img/login3.jpg" alt="">
                <h2 class="title">Painel de Controle</h2>
            </div>

            <div class="card-group">
                <label>CPF</label>
            <input type="text" name="cpf" placeholder="Digite seu CPF" required>      
            </div>

            <div class="card-group">
                <label>Senha</label>
            <input type="password" name="cpf" placeholder="Digite sua senha" required>      
            </div>

            <div class="card-group">
                <label><input type="checkbox">Lembre-me</label>     
            </div>

            <div class="card-group btn">
                <button type="submit">ACESSAR</button>    
            </div>

            <div class="conta">
                <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se agora</a></p>
            </div>

        </div>
    </form>

</body>
</html>