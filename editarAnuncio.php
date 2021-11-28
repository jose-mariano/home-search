<?php
    date_default_timezone_set('America/Sao_Paulo');

    require_once("bd/categoria.php");
    require_once("bd/anuncio.php");
    require_once("utils/manipulacaoImagem.php");
    require_once("utils/autenticacao.php");

    verificarAutenticacao();
    $id_anunciante = $_SESSION['id']; 

    $idAnuncio = isset($_GET["id"]) ? $_GET["id"] : "" ;
    if($idAnuncio == ""){
        header("Location: anunciante.php");
    }

    $anuncio = pegarAnuncioPorId($idAnuncio);

    $formularioPreenchido = isset($_POST["btnEnviar"]) ? $_POST["btnEnviar"] : "" ;
    if($formularioPreenchido != ""){
        $dados = array(
            "categoriaImovel" => isset($_POST["categoriaImovel"]) ? $_POST["categoriaImovel"] : "" ,
            "ruaAnuncio" => isset($_POST["ruaAnuncio"]) ? $_POST["ruaAnuncio"] : "" ,
            "numeroAnuncio" => isset($_POST["numeroAnuncio"]) ? $_POST["numeroAnuncio"] : "" ,
            "cidadeAnuncio" => isset($_POST["cidadeAnuncio"]) ? $_POST["cidadeAnuncio"] : "" ,
            "bairroAnuncio" => isset($_POST["bairroAnuncio"]) ? $_POST["bairroAnuncio"] : "" ,
            "CEP" => isset($_POST["CEP"]) ? $_POST["CEP"] : "" ,
            "quartosAnuncio" => isset($_POST["quartosAnuncio"]) ? $_POST["quartosAnuncio"] : "" ,
            "qntdBanheiros" => isset($_POST["qntdBanheiros"]) ? $_POST["qntdBanheiros"] : "" ,
            "tituloAnuncio" => isset($_POST["tituloAnuncio"]) ? $_POST["tituloAnuncio"] : "" ,
            "descricaoAnuncio" => isset($_POST["descricaoAnuncio"]) ? $_POST["descricaoAnuncio"] : "" ,
            "valorAnuncio" => isset($_POST["valorAnuncio"]) ? $_POST["valorAnuncio"] : "" ,
            "tipoAnuncio" => isset($_POST["tipoAnuncio"]) ? $_POST["tipoAnuncio"] : "" 
        );
        $imagemAnuncio = isset($_FILES["imagemAnuncio"]) ? $_FILES["imagemAnuncio"] : array("error" => 4);
        $complementoAnuncio = isset($_POST["complementoAnuncio"]) ? $_POST["complementoAnuncio"] : "" ;
        $qntdVagas = isset($_POST["qntdVagas"]) ? $_POST["qntdVagas"] : 0 ;

        if(in_array("", $dados)){
            echo ("<script>
            alert('Todos os campos obrigatórios precisam estar preenchidos!');
            </script>");
        } else {
            $imagem = $anuncio['imagem_anuncio'];

            if (is_array($imagemAnuncio) && $imagemAnuncio['error'] == 0){
                $imagem = salvarImagem($imagemAnuncio, "storage");
            }

            atualizarAnuncio(
                $idAnuncio,
                $id_anunciante,
                $dados["tituloAnuncio"],          
                $dados["tipoAnuncio"],              
                str_replace(",", ".", $dados["valorAnuncio"]),
                str_replace("-", "", $dados["CEP"]),                
                $dados["ruaAnuncio"],             
                $dados["numeroAnuncio"],       
                $dados["bairroAnuncio"],       
                $dados["quartosAnuncio"], 
                $dados["qntdBanheiros"],  
                $imagem,         
                date('Y-m-d H:i:s'),      
                1, // Disponibilidade anúncio
                $dados["cidadeAnuncio"],
                $dados["descricaoAnuncio"],
                $dados["categoriaImovel"],
                $complementoAnuncio,
                $qntdVagas
            );
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar anúncio</title>

    <link rel="icon" href="public/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="public/css/novoAnuncio.css">

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
                            <a href="index.php" class="hover:bg-blue-500 p-3 rounded-full">Sair</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- LOGIN -->
    <form class="form" action="editarAnuncio.php?id=<?= $idAnuncio ?>" method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="card-top">
                <img class="imgCadastro" src="public/img/corretor-de-imoveis.png" alt="">
                <h2 class="title">Cadastre seu imóvel</h2>
            </div>

            <div class="card-group">
                <label for="exampleFormControlSelect1">Categoria do imóvel*</label>
                <select class="form-control" id="categoriaImovel" name="categoriaImovel">
                    <?php
                        $categorias = listarCategorias();
                        while($categoria = mysqli_fetch_assoc($categorias)){

                            $id_categoria = $categoria["id_categoria"];
                            $nome_categoria = $categoria["nome_categoria"];
                            $opcaoSelecionada = ($id_categoria == $anuncio['fk_categoria_anuncio']) ? "selected" : "";

                            echo("<option value='{$id_categoria}' {$opcaoSelecionada}>{$nome_categoria}</option>");
                        }
                    ?>
                </select>
            </div>

            <div class="card-group teste">
                <div class="te">
                    <label>Rua*</label>
                    <input type="text" name="ruaAnuncio" value="<?= $anuncio['rua_anuncio'] ?>" placeholder="Digite aqui sua rua" required>
                </div>
                <div class="tes">
                    <label>Número*</label>
                    <input type="text" name="numeroAnuncio" value="<?= $anuncio['numero_casa_anuncio'] ?>" placeholder="Ex: 15" required>
                </div>
            </div>
            <div class="card-group cb">
                <div class="city">
                    <label>Cidade* <br></label>
                    <input type="text" name="cidadeAnuncio" value="<?= $anuncio['cidade_anuncio'] ?>" placeholder="Digite sua cidade" required>
                </div>
                <div class="bairro">
                    <label>Bairro* <br></label>
                    <input type="text" name="bairroAnuncio" value="<?= $anuncio['bairro_anuncio'] ?>" placeholder="Digite seu bairro" required>
                </div>
                <div class="cep">
                    <label>CEP* <br></label>
                    <input type="text" name="CEP" value="<?= $anuncio['cep_anuncio'] ?>" placeholder="Digite seu CEP" required>
                </div>
            </div>
            <div class="card-group">
                <label>Complemento (Opcional) </label>
                <input type="text" name="complementoAnuncio" value="<?= $anuncio['complemento_anuncio'] ?>" placeholder="Digite algum ponto de referencia.">
            </div>
            <div class="card-group">
                <label for="exampleFormControlSelect1">Quantidade de quartos*</label>
                <select class="form-control" id="exampleFormControlSelect1" name="quartosAnuncio">
                    <?php    
                        for ($index = 1; $index <= 10; $index++){
                            $opcaoSelecionada = ($index == $anuncio['numero_quartos_anuncio']) ? "selected" : "";
                            echo ("<option value='{$index}' {$opcaoSelecionada}>{$index}</option>");
                        }
                    ?>
                </select>
            </div>
            <div class="card-group">
                <label for="exampleFormControlSelect1">Quantidade de banheiros*</label>
                <select class="form-control" id="exampleFormControlSelect2" name="qntdBanheiros">
                    <?php    
                        for ($index = 1; $index <= 5; $index++){
                            $opcaoSelecionada = ($index == $anuncio['numero_banheiros_anuncio']) ? "selected" : "";
                            echo ("<option value='{$index}' {$opcaoSelecionada}>{$index}</option>");
                        }
                    ?>
                </select>
            </div>

            <div class="card-group">
                <label for="exampleFormControlSelect1">Quantidade de vagas</label>
                <select class="form-control" id="qntdVagas" name="vagasAnuncio">
                    <?php    
                        for ($index = 0; $index <= 5; $index++){
                            $opcaoSelecionada = ($index == $anuncio['numero_vagas_anuncio']) ? "selected" : "";
                            echo ("<option value='{$index}' {$opcaoSelecionada}>{$index}</option>");
                        }
                    ?>
                </select>
            </div>

            <div class="card-group">
                <label>Imagem do imóvel</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagemAnuncio" >
            </div>

            <div class="card-group">
                <label> O que gostaria de fazer com seu imóvel?</label>
                <div>
                    <?php
                        $opcaoAlugar = ($anuncio['tipo_anuncio'] == "alugar") ? 'checked' : ""; 
                        $opcaoVender = ($anuncio['tipo_anuncio'] == "vender") ? 'checked' : ""; 
                    ?>
                    <label for="nome">Alugar</label>
                    <input type="radio" name="tipoAnuncio" id="alugar" value="alugar" <?= $opcaoAlugar ?>>

                    <label for="nome">Vender</label>
                    <input type="radio" name="tipoAnuncio" id="vender" value="vender" <?= $opcaoVender ?>>
                </div>
            </div>

            <div class="card-group">
                <label>Titulo do seu anúncio*</label>
                <input class="test"  type="text" name="tituloAnuncio" value="<?= $anuncio['titulo_anuncio'] ?>" placeholder="Digite um titulo para seu anúncio" required>
            </div>

            <div class="card-group ">
                <label>Descrição do imóvel*</label>
                <textarea name="descricaoAnuncio" id="msg" cols="87" rows="6" maxlength="300"placeholder="Digite aqui uma breve descrição do imóvel"  required></textarea>
                <div class="result">Caracteres restantes: 300</div>
                <script src="public/js/caracteres.js"></script>
            </div>

            <div class="card-group">
                <label>Valor do imóvel*</label>
                <input type="text" name="valorAnuncio" value="<?= $anuncio['valor_anuncio'] ?>" placeholder="R$" required>
            </div>
            <div class="card-group btn">
                <a href="anunciante.php" class="card-group btn">
                    <button type="button">CANCELAR</button>
                </a>
                <button type="submit" name="btnEnviar" value="Salvar">SALVAR ALTERAÇÕES</button>
            </div>
        </div>

            </div>
    </form>

</body>
</html>