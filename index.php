<?php

//Import do arquivo de conexão com o banco
require_once('bd/conexao.php');
require_once('bd/anuncio.php');
require_once('bd/categoria.php');

$tipo_anuncio = isset($_POST['tipoAnuncio']) ? $_POST['tipoAnuncio'] : "";
$categoria_anuncio = isset($_POST['categoriaAnuncio']) ? $_POST['categoriaAnuncio'] : "";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homesearch</title>
    <link rel="icon" href="public/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body class="bg-gray-300">
    <!-- HEADER -->
    <header>
        <div class="flex flex-1 relative bg-gray-700 w-full h-24">
            <!-- LOGO -->
            <div>
                <a href="">
                    <img src="public/img/logo.png" alt="Logo Homesearch" class="w-70 ml-4 mt-5">
                </a>
            </div>
            <!-- BOTAO -->
            <div class="items-end flex-1 text-white text-2xl my-3">
                <nav class="flex-1">
                    <ul class="flex justify-end flex-1">
                        <li class="p-5">
                            <a href="cadastro.php" class="hover:bg-blue-500 p-3 rounded-full">Anunciar</a>
                        </li>
                        <li class="p-5">
                            <a href="anunciante.php" class="hover:bg-blue-500 p-3 rounded-full">Área do Anunciante</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- BANNER PRINCIPAL -->
    <div class="flex flex-1 w-full self-center">
        <img src="public/img/banner.png" class="relative" alt="Banner Principal">
        <!-- BOTAO COMPRA -->
        <div class="flex flex-1 w-full absolute justify-center self-center">

            <!-- <button class="inline-block w-72 h-20 text-2xl text-white bg-gray-700 mr-10 rounded-full hover:bg-blue-500">Desejo Alugar</button>
            <button class="inline-block w-72 h-20 text-2xl text-white bg-gray-700 ml-10 rounded-full hover:bg-blue-500">Desejo Comprar</button> -->

            <form action="index.php" method="POST">
                <select class="inline-block w-60 h-20 text-2xl text-white text-center bg-gray-700 mr-10 rounded-full hover:bg-blue-500" name="tipoAnuncio">
                    <option class="bg-gray-700" value="">Alugar/Comprar</option>
                    <option class="bg-gray-700" value="alugar">Alugar</option>
                    <option class="bg-gray-700" value="vender">Vender</option>  
                </select>
                <select class="inline-block w-60 h-20 text-2xl text-white text-center bg-gray-700 mr-10 rounded-full hover:bg-blue-500" name="categoriaAnuncio">
                    <option class="bg-gray-700" value="">Categorias</option>
                    <?php
                        $categorias = listarCategorias();
                        while($categoria = mysqli_fetch_assoc($categorias)){

                            $id_categoria = $categoria["id_categoria"];
                            $nome_categoria = $categoria["nome_categoria"];

                            echo("<option class='bg-gray-700' value='{$id_categoria}'>{$nome_categoria}</option>");
                        }
                    
                    ?>
                </select>
                <button type="submit">Pesquisar</button>
            </form>
        </div>        
    </div>
    <!-- GRID ANUNCIOS -->
    <div class="flex flex-wrap justify-center">
        <?php

        $anuncios = listarAnunciosPorFiltro($tipo_anuncio, $categoria_anuncio);
        while ($anuncio = mysqli_fetch_assoc($anuncios)){
            echo ("
            <div class='w-96 bg-white rounded-3xl flex-col p-5 m-1.5 my-5'>
                <img src='".$anuncio["imagem_anuncio"]."' alt='Imovel 2' class='w-96 p-5 rounded-3xl'>
                <h1 class='p-5 text-lg font-bold'>".$anuncio["titulo_anuncio"]."</h1>
                <h2 class='p-5 text-lg font-semibold'>R$ ".$anuncio["valor_anuncio"]."</h2>
                <p class='font-light text-lg p-5'>".$anuncio["descricao_anuncio"]."</p>
                <a href='anuncioDetalhado.php?id=".$anuncio['id_anuncio']."' class='w-40 p-1.5 m-8 text-white bg-gray-700 hover:bg-blue-500 rounded-2xl'>
                <img src='public/img/favicon.png' class='w-9 inline-block' alt='Mais Detalhes'>
                Clique para mais detalhes</a>
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