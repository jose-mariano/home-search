<?php

require_once("bd/anuncio.php");
require_once("utils/autenticacao.php");

verificarAutenticacao();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Anunciante</title>
    <link rel="icon" href="public/img/gerenciar.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/anunciante.css">
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
            <!-- BOTAO -->
            <div class="items-end flex-1 text-white text-2xl my-3">
                <nav class="flex-1">
                    <ul class="flex justify-end flex-1">
                        <li class="p-5">
                            <a href="logout.php" class="hover:bg-blue-500 p-3 rounded-full">Sair</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- BANNER PRINCIPAL -->
    <div class="flex flex-1 w-full self-center">
        <img src="public/img/banner.png" class="relative" alt="Banner Principal">
        <!-- BOTAO ANUNCIOS ATIVOS/INATIVOS -->
        <div class="flex flex-1 w-full absolute justify-center self-center">
            <a href="novoAnuncio.php">
                <button class="inline-block w-72 h-20 text-2xl text-white bg-gray-700 mr-10 rounded-full hover:bg-blue-500">
                    <img src="public/img/add.png" class="w-10 pb-1 inline-block" alt="Anunciar">
                    Novo Anúncio
                </button>
            </a>
            <button class="inline-block w-72 h-20 text-2xl text-white bg-gray-700 ml-10 rounded-full hover:bg-blue-500">
            <img src="public/img/anuncios.png" class="w-10 pb-1 inline-block" alt="Anunciar">
                Meus Anúncios
            </button>
        </div>        
    </div>
    <!-- GRID ANUNCIOS -->
    <div class="flex flex-wrap justify-center">
        <?php

            $anuncios = listarAnunciosPorAnunciante(1);
            while ($anuncio = mysqli_fetch_assoc($anuncios)){
                echo ("
                <div class='w-96 bg-white rounded-3xl flex-col p-5 m-1.5 my-5'>
                    <img src='".$anuncio["imagem_anuncio"]."' alt='Imovel 2' class='w-96 p-5 rounded-3xl'>
                    <h1 class='p-5 text-lg font-bold'>".$anuncio["titulo_anuncio"]."</h1>
                    <h2 class='p-5 text-lg font-semibold'>R$ ".$anuncio["valor_anuncio"]."</h2>
                    <p class='font-light text-lg p-5'>".$anuncio["descricao_anuncio"]."</p>
                    <a href='editarAnuncio.php?id=".$anuncio['id_anuncio']."' class='w-10 p-1.5 text-white rounded-2xl'>
                        <img src='public/img/editar.png' title='Editar' class='w-7 inline-block' alt='Editar'>
                    </a>
                    <a onclick=\"return confirm('Deseja realmente excluir?');\" href='excluirAnuncio.php?id=".$anuncio['id_anuncio']."' class='w-10 p-1.5 text-white rounded-2xl'>
                        <img src='public/img/excluir.png' title='Excluir' class='w-7 inline-block' alt='Excluir'>
                    </a>
                </div>"
                );
            }
            
        ?>
    </div>    
    <!-- FOOTER -->
    <div class="flex w-full bg-gray-700 h-20">
        <div class="flex-1 text-white font-bold text-xl my-9">
            <footer>
                <ul class="flex justify-center flex-1">
                    <li>
                        Homesearch 2021 
                    </li>
                    <li>
                    </li>
                </ul>
            </footer>
    <div>
</body>
</html>