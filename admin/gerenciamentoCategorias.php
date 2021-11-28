<?php

require_once("bd/adminCategoria.php");

$modo =  isset($_GET["modo"]) ? $_GET["modo"] : "" ;
$id =  isset($_GET["id"]) ? $_GET["id"] : "" ;
$nomeCategoria = isset($_POST["nomeCategoria"]) ? $_POST["nomeCategoria"] : "" ;

if ($modo == "inserir" && $nomeCategoria != "" && strlen($nomeCategoria) <= 50)
{
    inserirCategoria($nomeCategoria);
}

if ($modo == "editar" && $id != "" && $nomeCategoria != "" && strlen($nomeCategoria) <= 50)
{
    atualizarCategoria($nomeCategoria, $id);
}

if ($modo == "excluir" && $id != "")
{
    excluirCategoria($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Categorias</title>
    <link rel="icon" href="../public/img/gerenciar.png" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/gerenciamentoCategorias.css">
</head>
<body class="bg-gray-300">
    <!-- HEADER -->
    <header>
        <div class="flex flex-1 relative bg-gray-700 w-full h-24">
            <!-- LOGO HEADER -->
            <div>
                <a href="">
                    <img src="../public/img/logo.png" alt="Logo Homesearch" class="w-70 ml-4 mt-5">
                </a>
            </div>
            <!-- BOTAO HEADER -->
            <div class="items-end flex-1 text-white text-2xl my-3">
                <nav class="flex-1">
                    <ul class="flex justify-end flex-1">
                        <li class="p-5">
                            <a href="" class="hover:bg-blue-500 p-3 rounded-full">Gerenciamento de Anunciantes</a>
                        </li>
                        <li class="p-5">
                            <a href="" class="hover:bg-blue-500 p-3 rounded-full">Sair</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<!-- GERENCIAMENTO DE CATEGORIAS -->    
<div class="flex flex-wrap w-full justify-center">
<div class="flex-col bg-white m-10 rounded-3xl w-1/3">
<div id="consultaDeDados" class="flex flex-col">
    <h1 class="self-center font-bold text-4xl my-10">Gerenciamento de Categorias</h1>
    <!-- CADASTRAMENTO DE CATEGORIAS --> 
    <form class="self-center my-2" action="gerenciamentoCategorias.php?modo=<?php echo(($modo == "editar") ? "editar&id={$id}" : "inserir") ?>" method="POST">
        <?php
            $valorInputCategoria = "";
            if ($modo == "editar")
            {
                $categoriaPorId = pegarCategoriaPorId($id);
                $valorInputCategoria = $categoriaPorId["nome_categoria"];
            }
            echo("<input class='w-72 bg-gray-200 rounded-3xl p-2' type='text' name='nomeCategoria' value='{$valorInputCategoria}' placeholder=' Insira o nome da categoria...'>");
        ?>
        <button type="submit" class="w-24 h-10 text-white bg-gray-700 rounded-full hover:bg-blue-500"><?php echo(($modo == "editar") ? "Atualizar" : "Cadastrar") ?></button>
    </form>
            <!-- LISTAGEM DE CATEGORIAS -->
            <table class="my-6 self-center" id="tblConsulta" >
                <tr id="tblLinhas">
                    <h1 class="font-bold text-4xl self-center mt-5">Listagem de Categorias</h1>
                </tr>
                
                <?php
            
                $categorias = listarCategorias();

                while ($arrayCategorias = mysqli_fetch_assoc($categorias)){

                    echo("
                        <tr id='tblLinhas'>
                            <td class='text-2xl p-1.5'>{$arrayCategorias['nome_categoria']}</td>
                            <td class='tblColunas registros'>
                                <a href='gerenciamentoCategorias.php?modo=editar&id={$arrayCategorias['id_categoria']}'> <img src='../public/img/editar.png' alt='Editar' title='Editar' class='editar inline-block h-6 ml-10 mr-2'> </a>
                                <a onclick=\"return confirm('Deseja realmente excluir?');\" href='gerenciamentoCategorias.php?modo=excluir&id={$arrayCategorias['id_categoria']}'> <img src='../public/img/excluir.png' alt='Excluir' title='Excluir' class='excluir inline-block h-6'></a>
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