<?php

require_once("bd/adminAnunciante.php");
require_once("utils/autenticacao.php");

verificarAutenticacao();

$modo =  isset($_GET["modo"]) ? $_GET["modo"] : "" ;
$id =  isset($_GET["id"]) ? $_GET["id"] : "" ;

if ($modo == "excluir" && $id != "")
{
    excluirAnunciante($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de anunciantes</title>
    <link rel="icon" href="../public/img/gerenciar.png" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/gerenciamentoCategorias.css">
</head>
<body class="bg-gray-300">
    <!-- HEADER -->
    <header>
        <div class="flex flex-1 relative bg-gray-700 w-full h-24">
            <!-- O HEADER -->
            <div>
                <a href="#">
                    <img src="../public/img/logo.png" alt="Logo Homesearch" class="w-70 ml-4 mt-5">
                </a>
            </div>
            <!-- BOTAO HEADER -->
            <div class="items-end flex-1 text-white text-2xl my-3">
                <nav class="flex-1">
                    <ul class="flex justify-end flex-1">
                        <li class="p-5">
                            <a href="gerenciamentoCategorias.php" class="hover:bg-blue-500 p-3 rounded-full">Gerenciamento de categorias</a>
                        </li>
                        <li class="p-5">
                            <a href="logout.php" class="hover:bg-blue-500 p-3 rounded-full">Sair</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<!-- GERENCIAMENTO DE ANUNCIANTES -->    
<div class="flex flex-wrap w-full justify-center">
<div class="flex-col bg-white m-10 rounded-3xl w-1/3">
<div id="consultaDeDados" class="flex flex-col">
            <!-- LISTAGEM DE ANUNCIANTES -->
            <table class="my-6 self-center" id="tblConsulta" >
                <tr id="tblLinhas">
                    <h1 class="font-bold text-4xl self-center mt-5">Listagem de anunciantes</h1>
                </tr>
                
                <?php
            
                $anunciantes = listarAnunciantes();

                while ($arrayAnunciantes = mysqli_fetch_assoc($anunciantes)){

                    echo("
                        <tr id='tblLinhas'>
                            <td class='text-2xl p-1.5'>{$arrayAnunciantes['nome_anunciante']}</td>
                            <td class='tblColunas registros'>
                                <a onclick=\"return confirm('Deseja realmente excluir? Todos os anuncios vinculados ao anunciante serão deletados!');\" href='gerenciamentoAnunciantes.php?modo=excluir&id={$arrayAnunciantes['id_anunciante']}'> <img src='../public/img/excluir.png' alt='Excluir' title='Excluir' class='excluir inline-block h-6'></a>
                            </td>
                        </tr>
                    ");

                }

                ?>
                </table>
            </div>
        </div>
    </div>

</body>
</html>