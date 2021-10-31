<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cadastroAnunciante.css">

</head>
<body class="bg-gray-300">
    <!-- HEADER -->
    <header>
        <div class="flex flex-1 relative bg-gray-700 w-full h-24">
            <!-- LOGO -->
            <div>
                <a href="index.php">
                    <img src="img/logo.png" alt="Logo Homesearch" class="w-70 ml-4 mt-5">
                </a>
            </div>
        </div>
    </header>
    <!-- LOGIN -->
    <form class="form" action="#">
    <div class="card">
            <div class="card-top">
                <img class="imgCadastro" src="img/corretor-de-imoveis.png" alt="">
                <h2 class="title">Cadastro do Anunciante</h2>
                <p>Complete suas informações</p>
            </div>

            <div class="card-group">
                <label>Nome*</label>
            <input type="text" name="nome" placeholder="Digite seu Nome" required>      
            </div>

            <div class="card-group">
                <label>Email*</label>
            <input type="email" name="email" placeholder="exemplo@gmail.com" required>      
            </div>

            <div class="card-group">
                <label>Senha*</label>
            <input type="password" name="senha" placeholder="Digite sua senha" required>      
            </div>

            <div class="card-group">
                <label>Confirmar Senha*</label>
            <input type="password" name="senha" placeholder="Digite sua senha novamente" required>      
            </div>

            <div class="card-group">
                <label>CPF*</label>
            <input type="text" name="cpf" placeholder="Digite seu CPF" required>      
            </div>

            <div class="card-group cel">
                <label>Celular*</label>
            <input type="tel" name="cpf" placeholder="Digite seu número para contato" required>      
            </div>

            <div class="card-group btn">
                <button type="submit">CADASTRAR</button>    
            </div>

            <div class="conta">
                <p>Já tem uma conta? <a href="login.php">Faça o login</a></p>
            </div>

    </div>
    </form>

</body>
</html>