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
            </div class="select">
            <div class="card-group">
                <label> O que gostaria de fazer com seu imóvel?</label>
                <selecionar>
                    <label for="nome">Alugar</label>
                    <input type="radio" name="nome" id="nome">

                    <label for="nome">Vender</label>
                    <input type="radio" name="nome" id="nome">
                </selecionar>
            </div>
            <div class="card-group teste">
                <div class="te">
                    <label>Endereço*</label>
                    <input type="text" name="endereço" placeholder="Digite aqui sua rua" required>
                </div>
                <div class="tes">
                    <label>Número*</label>
                    <input type="text" name="numero" placeholder="Ex: 15" required>
                </div>
            </div>
            <div class="card-group cb">
                <div class="city">
                    <label>Cidade* <br></label>
                    <input type="text" name="cidade" placeholder="Digite sua cidade" required>
                </div>
                <div class="bairro">
                    <label>Bairro* <br></label>
                    <input type="text" name="bairro" placeholder="Digite seu bairro" required>
                </div>
                <div class="cep">
                    <label>CEP* <br></label>
                    <input type="text" name="CEP" placeholder="Digite seu CEP" required>
                </div>
            </div>
            <div class="card-group">
                <label>Complemento (Opcional) </label>
                <input type="text" name="CEP" placeholder="Digite algum ponto de referencia.">
            </div>
            <div class="card-group">
                <label for="exampleFormControlSelect1">Quantidade de quartos*</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
            <div class="card-group">
                <label for="exampleFormControlSelect1">Quantidade de banheiros*</label>
                <select class="form-control" id="exampleFormControlSelect2">
                    <option>1 </option>
                    <option>2 </option>
                    <option>3 </option>
                    <option>4 </option>
                    <option>5 </option>
                </select>
            </div>
            <div class="card-group">
                <label>Imagem do imóvel*</label>
                <input type="file" name="imagemAnuncio" class="form-control-file" id="exampleFormControlFile1" required>
            </div>

            <div class="card-group">
                <label>Titulo do seu anúncio*</label>
                <input class="test"  type="text" name="cpf" placeholder="Digite um titulo para seu anúncio" required>
            </div>

            <div class="card-group ">
                <label>Descrição do imóvel*</label>
                <textarea rows="6" cols="87"   name="descricao" placeholder="Digite aqui uma breve descrição do imóvel"  required></textarea>
            </div>

            <div class="card-group">
                <label>Valor do imóvel*</label>
                <input type="number" name="cpf" placeholder="R$" step="0.01" required>
            </div>
            <div class="card-group btn">
                <button type="submit">CADASTRAR</button>
            </div>
        </div>

            </div>
    </form>

</body>
</html>