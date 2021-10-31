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
                            <a href="index.php" class="hover:bg-blue-500 p-3 rounded-full">Sair</a>
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
        <div class="w-96 bg-white rounded-3xl flex-col p-5 m-1.5 my-5">
            <img src="public/img/imovel1.png" alt="Imovel 2" class="w-96 p-5 rounded-3xl">
            <h1 class="p-5 text-lg font-bold">Sobrado em Alphaville, Barueri, SP</h1>
            <h2 class="p-5 text-lg font-semibold">R$ 2.000.000,00</h2>
            <p class="font-light text-lg p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, eaque temporibus repudiandae vel minima ipsum! Suscipit eveniet soluta dolorum aspernatur in placeat quibusdam non iusto praesentium, libero quae perferendis consequatur.</p>
            <a href="" class="w-40 p-1.5 m-8 text-white bg-gray-700 hover:bg-blue-500 rounded-2xl">
                <img src="public/img/gerenciar.png" class="w-7 pb-1 inline-block" alt="Mais Detalhes"> Gerenciar</a>
        </div>
        <div class="w-96 bg-white rounded-3xl flex-col p-5 m-1.5 my-5">
            <img src="public/img/imovel2.png" alt="Imovel 2" class="w-96 p-5 rounded-3xl">
            <h1 class="p-5 text-lg font-bold">Sobrado em Alphaville, Barueri, SP</h1>
            <h2 class="p-5 text-lg font-semibold">R$ 2.000.000,00</h2>
            <p class="font-light text-lg p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, eaque temporibus repudiandae vel minima ipsum! Suscipit eveniet soluta dolorum aspernatur in placeat quibusdam non iusto praesentium, libero quae perferendis consequatur.</p>
            <a href="" class="w-40 p-1.5 m-8 text-white bg-gray-700 hover:bg-blue-500 rounded-2xl">
                <img src="public/img/gerenciar.png" class="w-7 pb-1 inline-block" alt="Mais Detalhes"> Gerenciar</a>
        </div>
        <div class="w-96 bg-white rounded-3xl flex-col p-5 m-1.5 my-5">
            <img src="public/img/imovel3.png" alt="Imovel 2" class="w-96 p-5 rounded-3xl">
            <h1 class="p-5 text-lg font-bold">Sobrado em Alphaville, Barueri, SP</h1>
            <h2 class="p-5 text-lg font-semibold">R$ 2.000.000,00</h2>
            <p class="font-light text-lg p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, eaque temporibus repudiandae vel minima ipsum! Suscipit eveniet soluta dolorum aspernatur in placeat quibusdam non iusto praesentium, libero quae perferendis consequatur.</p>
            <a href="" class="w-40 p-1.5 m-8 text-white bg-gray-700 hover:bg-blue-500 rounded-2xl">
                <img src="public/img/gerenciar.png" class="w-7 pb-1 inline-block" alt="Mais Detalhes"> Gerenciar</a>
        </div>
        <div class="w-96 bg-white rounded-3xl flex-col p-5 m-1.5 my-5">
            <img src="public/img/imovel4.png" alt="Imovel 2" class="w-96 p-5 rounded-3xl">
            <h1 class="p-5 text-lg font-bold">Sobrado em Alphaville, Barueri, SP</h1>
            <h2 class="p-5 text-lg font-semibold">R$ 2.000.000,00</h2>
            <p class="font-light text-lg p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, eaque temporibus repudiandae vel minima ipsum! Suscipit eveniet soluta dolorum aspernatur in placeat quibusdam non iusto praesentium, libero quae perferendis consequatur.</p>
            <a href="" class="w-40 p-1.5 m-8 text-white bg-gray-700 hover:bg-blue-500 rounded-2xl">
                <img src="public/img/gerenciar.png" class="w-7 pb-1 inline-block" alt="Mais Detalhes"> Gerenciar</a>
        </div>
        <div class="w-96 bg-white rounded-3xl flex-col p-5 m-1.5 my-5">
            <img src="public/img/imovel5.png" alt="Imovel 2" class="w-96 p-5 rounded-3xl">
            <h1 class="p-5 text-lg font-bold">Sobrado em Alphaville, Barueri, SP</h1>
            <h2 class="p-5 text-lg font-semibold">R$ 2.000.000,00</h2>
            <p class="font-light text-lg p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, eaque temporibus repudiandae vel minima ipsum! Suscipit eveniet soluta dolorum aspernatur in placeat quibusdam non iusto praesentium, libero quae perferendis consequatur.</p>
            <a href="" class="w-40 p-1.5 m-8 text-white bg-gray-700 hover:bg-blue-500 rounded-2xl">
                <img src="public/img/gerenciar.png" class="w-7 pb-1 inline-block" alt="Mais Detalhes"> Gerenciar</a>
        </div>
        <div class="w-96 bg-white rounded-3xl flex-col p-5 m-1.5 my-5">
            <img src="public/img/imovel6.png" alt="Imovel 2" class="w-96 p-5 rounded-3xl">
            <h1 class="p-5 text-lg font-bold">Sobrado em Alphaville, Barueri, SP</h1>
            <h2 class="p-5 text-lg font-semibold">R$ 2.000.000,00</h2>
            <p class="font-light text-lg p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, eaque temporibus repudiandae vel minima ipsum! Suscipit eveniet soluta dolorum aspernatur in placeat quibusdam non iusto praesentium, libero quae perferendis consequatur.</p>
            <a href="" class="w-40 p-1.5 m-8 text-white bg-gray-700 hover:bg-blue-500 rounded-2xl">
                <img src="public/img/gerenciar.png" class="w-7 pb-1 inline-block" alt="Mais Detalhes"> Gerenciar</a>
        </div>
        <div class="w-96 bg-white rounded-3xl flex-col p-5 m-1.5 my-5">
            <img src="public/img/imovel7.png" alt="Imovel 2" class="w-96 p-5 rounded-3xl">
            <h1 class="p-5 text-lg font-bold">Sobrado em Alphaville, Barueri, SP</h1>
            <h2 class="p-5 text-lg font-semibold">R$ 2.000.000,00</h2>
            <p class="font-light text-lg p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, eaque temporibus repudiandae vel minima ipsum! Suscipit eveniet soluta dolorum aspernatur in placeat quibusdam non iusto praesentium, libero quae perferendis consequatur.</p>
            <a href="" class="w-40 p-1.5 m-8 text-white bg-gray-700 hover:bg-blue-500 rounded-2xl">
                <img src="public/img/gerenciar.png" class="w-7 pb-1 inline-block" alt="Mais Detalhes"> Gerenciar</a>
        </div>
        <div class="w-96 bg-white rounded-3xl flex-col p-5 m-1.5 my-5">
            <img src="public/img/imovel8.png" alt="Imovel 2" class="w-96 p-5 rounded-3xl">
            <h1 class="p-5 text-lg font-bold">Sobrado em Alphaville, Barueri, SP</h1>
            <h2 class="p-5 text-lg font-semibold">R$ 2.000.000,00</h2>
            <p class="font-light text-lg p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, eaque temporibus repudiandae vel minima ipsum! Suscipit eveniet soluta dolorum aspernatur in placeat quibusdam non iusto praesentium, libero quae perferendis consequatur.</p>
            <a href="" class="w-40 p-1.5 m-8 text-white bg-gray-700 hover:bg-blue-500 rounded-2xl">
                <img src="public/img/gerenciar.png" class="w-7 pb-1 inline-block" alt="Mais Detalhes"> Gerenciar</a>
        </div>
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