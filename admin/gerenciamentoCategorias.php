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
    <title>Document</title>
</head>
<body>
<div id="consultaDeDados">
    <form action="gerenciamentoCategorias.php?modo=<?php echo(($modo == "editar") ? "editar&id={$id}" : "inserir") ?>" method="POST">
        <?php
            $valorInputCategoria = "";
            if ($modo == "editar")
            {
                $categoriaPorId = pegarCategoriaPorId($id);
                $valorInputCategoria = $categoriaPorId["nome_categoria"];
            }
            echo("<input type='text' name='nomeCategoria' value='{$valorInputCategoria}'>");
        ?>
        <button type="submit"><?php echo(($modo == "editar") ? "Atualizar" : "Cadastrar") ?></button>
    </form>
            <table id="tblConsulta" >
                <tr id="tblLinhas">
                    <th class="tblColunas destaque" colspan="2">Categorias</th
                >
                </tr>
                
                <?php
            
                $categorias = listarCategorias();

                while ($arrayCategorias = mysqli_fetch_assoc($categorias)){

                    echo("
                        <tr id='tblLinhas'>
                            <td class='tblColunas registros'>{$arrayCategorias['nome_categoria']}</td>
                            <td class='tblColunas registros'>
                                <a href='gerenciamentoCategorias.php?modo=editar&id={$arrayCategorias['id_categoria']}'> <img src='img/edit.png' alt='Editar' title='Editar' class='editar'> </a>
                                <a onclick=\"return confirm('Deseja realmente excluir?');\" href='gerenciamentoCategorias.php?modo=excluir&id={$arrayCategorias['id_categoria']}'> <img src='img/trash.png' alt='Excluir' title='Excluir' class='excluir'></a>
                            </td>
                        </tr>
                    ");

                }

                ?>

            </table>
        </div>

</body>
</html>