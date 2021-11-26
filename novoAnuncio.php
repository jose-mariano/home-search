<?php
    date_default_timezone_set('America/Sao_Paulo');

    require_once("bd/categoria.php");
    require_once("bd/anuncio.php");
    require_once("utils/manipulacaoImagem.php");

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
            "tipoAnuncio" => isset($_POST["tipoAnuncio"]) ? $_POST["tipoAnuncio"] : "" ,
            "imagemAnuncio" => isset($_FILES["imagemAnuncio"]) ? $_FILES["imagemAnuncio"] : "" 
        );
        $complementoAnuncio = isset($_POST["complementoAnuncio"]) ? $_POST["complementoAnuncio"] : "" ;
        $qntdVagas = isset($_POST["qntdVagas"]) ? $_POST["qntdVagas"] : 0 ;

        if(in_array("", $dados)){
            echo ("<script>
            alert('Todos os campos obrigatórios precisam estar preenchidos!');
            </script>");
        } else {
            $imagem = salvarImagem($dados["imagemAnuncio"], "storage");

            inserirAnuncio(
                $dados["tituloAnuncio"],          
                $dados["tipoAnuncio"],              
                str_replace(",", ".", $dados["valorAnuncio"]),
                $dados["CEP"],               
                $dados["ruaAnuncio"],             
                $dados["numeroAnuncio"],       
                $dados["bairroAnuncio"],       
                $dados["quartosAnuncio"],   
                $imagem,         
                date('Y-m-d H:i:s'),      
                1, // Disponibilidade anúncio
                $dados["cidadeAnuncio"],
                $dados["descricaoAnuncio"],
                1, // Id do anunciante
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

    <title>Novo Anúncio</title>

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
    <form class="form" action="novoAnuncio.php" method="POST" enctype="multipart/form-data">
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

                            echo("<option value='{$id_categoria}'>{$nome_categoria}</option>");
                        }
                    ?>
                </select>
            </div>

            <div class="card-group teste">
                <div class="te">
                    <label>Rua*</label>
                    <input type="text" name="ruaAnuncio" placeholder="Digite aqui sua rua" required>
                </div>
                <div class="tes">
                    <label>Número*</label>
                    <input type="text" name="numeroAnuncio" placeholder="Ex: 15" required>
                </div>
            </div>
            <div class="card-group cb">
                <div class="city">
                    <label>Cidade* <br></label>
                    <input type="text" name="cidadeAnuncio" placeholder="Digite sua cidade" required>
                </div>
                <div class="bairro">
                    <label>Bairro* <br></label>
                    <input type="text" name="bairroAnuncio" placeholder="Digite seu bairro" required>
                </div>
                <div class="cep">
                    <label>CEP* <br></label>
                    <input type="text" name="CEP" placeholder="Digite seu CEP" required>
                </div>
            </div>
            <div class="card-group">
                <label>Complemento (Opcional) </label>
                <input type="text" name="complementoAnuncio" placeholder="Digite algum ponto de referencia.">
            </div>
            <div class="card-group">
                <label for="exampleFormControlSelect1">Quantidade de quartos*</label>
                <select class="form-control" id="exampleFormControlSelect1" name="quartosAnuncio">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="card-group">
                <label for="exampleFormControlSelect1">Quantidade de banheiros*</label>
                <select class="form-control" id="exampleFormControlSelect2" name="qntdBanheiros">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="card-group">
                <label for="exampleFormControlSelect1">Quantidade de vagas</label>
                <select class="form-control" id="qntdVagas" name="vagasAnuncio">
                    <option value="0" selected >0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="card-group">
                <label>Imagens do imóvel*</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagemAnuncio" required>
            </div>

            <div class="card-group">
                <label> O que gostaria de fazer com seu imóvel?</label>
                <div>
                    <label for="nome">Alugar</label>
                    <input type="radio" name="tipoAnuncio" id="alugar" value="alugar">

                    <label for="nome">Vender</label>
                    <input type="radio" name="tipoAnuncio" id="vender" value="vender">
                </div>
            </div>

            <div class="card-group">
                <label>Titulo do seu anúncio*</label>
                <input class="test"  type="text" name="tituloAnuncio" placeholder="Digite um titulo para seu anúncio" required>
            </div>

            <div class="card-group ">
                <label>Descrição do imóvel*</label>
                <textarea rows="6" cols="87"   name="descricaoAnuncio" placeholder="Digite aqui uma breve descrição do imóvel"  required></textarea>
            </div>

            <div class="card-group">
                <label>Valor do imóvel*</label>
                <input type="text" name="valorAnuncio" placeholder="R$" required>
            </div>
            <div class="card-group btn">
                <button type="submit" name="btnEnviar" value="Salvar">CADASTRAR</button>
            </div>
        </div>

            </div>
    </form>

</body>
</html>