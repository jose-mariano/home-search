<!DOCTYPE HTML>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro do Anunciante</title>

    <link rel="stylesheet" href="css/cadastroAnunciante.css">

</head>

<body>

    <form class="form" action="#">
        <div class="card">
            <div class="card-top">
                <img class="imgCadastro" src="img/corretor-de-imoveis.png" alt="">
                <h2 class="title">Cadastre seu imóvel</h2>
            </div class="select">
            <div class="card-group">
                <label> Oque gostaria de fazer com seu imóvel?</label>
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
                    <label>Número</label>
                    <input type="text" name="numero" placeholder="" required>
                </div>
            </div>
            <div class="card-group cb">
                <div class="city">
                    <label>Cidade <br></label>
                    <input type="text" name="cidade" placeholder="Digite sua cidade" required>
                </div>
                <div class="bairro">
                    <label>Bairro <br></label>
                    <input type="text" name="bairro" placeholder="Digite seu bairro" required>
                </div>
                <div class="cep">
                    <label>CEP <br></label>
                    <input type="text" name="CEP" placeholder="Digite seu CEP" required>
                </div>
            </div>
            <div class="card-group">
                <label>Complemento (Opcional) </label>
                <input type="text" name="CEP" placeholder="Digite algum ponto de referencia.">
            </div>
            <div class="card-group">
                <label for="exampleFormControlSelect1">Quantidade de quartos</label>
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
                <label for="exampleFormControlSelect1">Quantidade de banheiros</label>
                <select class="form-control" id="exampleFormControlSelect2">
                    <option>1 </option>
                    <option>2 </option>
                    <option>3 </option>
                    <option>4 </option>
                    <option>5 </option>
                </select>
            </div>
            <div class="card-group">
                <label>Imagens do imóvel</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
            </div>

            <div class="card-group">
                <label>Titulo do seu anúncio</label>
                <input class="test" type="text" name="cpf" placeholder="Digite um titulo para seu anúncio" required>
            </div>

            <div class="card-group ">
                <label>Descrição do imóvel</label>
                <textarea rows="6" cols="87" name="descricao" placeholder="Digite aqui uma breve descrição do imóvel"
                    required> </textarea>
            </div>

            <div class="card-group">
                <label>Valor do imóvel</label>
                <input type="text" name="cpf" placeholder="R$" required>
            </div>
            <div class="card-group btn">
                <button type="submit">CADASTRAR</button>
            </div>
        </div>

        <body link="grey">

            </div>
    </form>
</body>