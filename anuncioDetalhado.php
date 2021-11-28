<?php

require_once('bd/anuncio.php');

$idAnuncio = isset($_GET["id"]) ? $_GET["id"] : "" ;
if($idAnuncio == ""){
    header('Location: index.php');
}

$anuncio = pegarAnuncioPorId($idAnuncio);
if ($anuncio == false){
    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $anuncio['titulo_anuncio'] ?></title>
    <link rel="stylesheet" href="public/css/anuncioDetalhado.css">
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
                            <a href="index.php" class="hover:bg-blue-500 p-3 rounded-full">Voltar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
     <!-- ANUNCIO DETALHADO -->
     <div class="flex flex-wrap justify-center">
        <div class="w-2/3 bg-white rounded-3xl p-5 my-5">
            <!-- TITULO -->
            <div class="flex flex-wrap justify-center">
                <p class="p-5 text-2xl font-bold my-3"><?= $anuncio['titulo_anuncio'] ?></p>
            </div>
            <!-- IMG -->
            <div class="flex flex-wrap justify-center">
                <img src="<?= $anuncio['imagem_anuncio'] ?>" alt="Imovel" class="w-2/3 rounded-lg">
            </div>
            <div class="flex flex-wrap justify-center">
                <p class="p-5 text-2xl font-bold my-3">Informações detalhadas do imóvel: </p>
            </div>
            <!-- DESCRIÇÃO -->
            <p class="p-3 text-2xl text-justify"><?= $anuncio['descricao_anuncio'] ?></p>          
            <!-- VALOR -->
            <p class="p-3 text-2xl font-bold inline-block">Preço do imóvel:</p>
            <p class="p-3 text-2xl inline-block">R$ <?= $anuncio['valor_anuncio'] ?></p>
            <br>
            <!-- ENDEREÇO -->
            <p class="p-3 text-2xl font-bold inline-block">Localizado em:</p>
            <p class="p-3 text-2xl inline-block"><?= $anuncio['bairro_anuncio'] ?>, <?= $anuncio['cidade_anuncio'] ?> - <?= $anuncio['cep_anuncio'] ?></p>
            <br>
            <!-- QTD QUARTOS -->
            <p class="p-3 text-2xl font-bold inline-block">Quantidade de quartos:</p>
            <p class="p-3 text-2xl inline-block"><?= $anuncio['numero_quartos_anuncio'] ?></p>
            <!-- QTD BANHEIROS -->
            <p class="p-3 text-2xl font-bold inline-block">Quantidade de banheiros:</p>
            <p class="p-3 text-2xl inline-block"><?= $anuncio['numero_banheiros_anuncio'] ?></p>
            <br>
            <!-- QTD QUARTOS -->
            <p class="p-3 text-2xl font-bold inline-block">Quantidade de vagas de garagem:</p>
            <p class="p-3 text-2xl inline-block"><?= $anuncio['numero_vagas_anuncio'] ?></p>
            <br>
            <!-- CONTATO -->
            <div class="flex flex-wrap justify-center mt-5">
            <p class="p-3 text-2xl font-bold mt-3 inline-block">Clique no botão abaixo e entre em contato com o anunciante:</p> 
            </div>                
            <div class="flex flex-wrap justify-center">
                <a href="https://api.whatsapp.com/send?phone=55<?= $anuncio['celular_anunciante'] ?>text=Fiquei%20interessado%20no%20im%C3%B3vel" class="w-40 p-1.5">
                    <img src="public/img/whatsapp.png" class="w-24 inline-block" alt="Contato Anunciante">
                </a>
            </div>
        </div>  
     </div>
</body>
</html>