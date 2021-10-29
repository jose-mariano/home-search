<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="css/cadastrar.css">
     <link rel="stylesheet" type="text/css" href="css/menu.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/a2879f18b0.js" crossorigin="anonymous"></script>

     <!-- Ícone superior -->
     <link rel="shortcut icon" href="public/images/favicon.ico">

     <title>Cadastre seu anúncio</title>
 </head>
 <body>
    <header class="menu">
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu">
			<img src="public/images/menu-icon.svg" alt="Menu" title="Menu">
		</label>
		<nav>
			<ul>
				<li>
					<a href="index.html">Início</a>
					<a href="anuncios.html">Ver anúncios</a>
					<a href="#">Anunciar</a>
					<a href="sobre.html">Sobre</a>
				</li>
			</ul>
		</nav>
		<div class="title-menu">
			<img src="public/images/logo.png" alt="Logotipo Home Search" title="Home Search">
			<h1>Home Search</h1>
		</div>
	</header>
    
  <div class="container p-5 my-4 rounded bg-light">
        <form>
          <h2 class="w-100 text-center mb-3">Cadastrar anúncio de um imóvel</h2>
          <label for="numero">Oque gostaria de fazer com seu imóvel</label>
          <div class="form-group my-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="vender">
              <label class="form-check-label" for="inlineRadio1">Vender</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="alugar" checked>
              <label class="form-check-label" for="inlineRadio2">Alugar</label>
            </div>
          </div>
          <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereço" placeholder="Digite aqui sua rua" value="" required=""  minlength="1">
                        <div class="invalid-feedback"> Este campo é obrigatório.</div>
                        <span> </span>
                    </div>
                    <div class="col-md-1 mb-3">
                        <label for="numero">Numero</label>
                        <input type="text" class="form-control" id="numero" placeholder="" value="" required="" minlength="1" >
                        <div class="invalid-feedback"> Este campo é obrigatório. </div>
                        <span> </span>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Digite aqui sua cidade" value="" required="">
                        <div class="invalid-feedback"> Este campo é obrigatório.</div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" placeholder="Digite aqui seu Bairro" value="" required="">
                        <div class="invalid-feedback"> Este campo é obrigatório.</div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep" placeholder="Digite aqui seu CEP" value="" required="">
                        <div class="invalid-feedback"> Este campo é obrigatório.</div>
                    </div>
                <div class="col-md-4 mb-3">
                <div class="form-group">
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
                <i class="fas fa-angle-double-down"></i>
      
             
            </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group">
              <label for="exampleFormControlSelect1">Quantidade de banheiros</label>
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
              <i class="fas fa-angle-double-down"></i>
            </div>
            </div>
            </div>
          <div class="form-group my-3">
            <label for="exampleFormControlFile1">Imagem da casa*</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
          </div>
          <div class="form-group">
            <label class="mb-1">Titulo do anúncio</label>
            <input class="form-control" type="text" placeholder="Digite aqui seu titulo" required>
          </div>
          <div class="form-group mt-3">
            <label for="exampleFormControlTextarea1" class="mb-1">Descrição do imóvel*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descrição" required style="resize: none;"></textarea>
          </div>
          <div class="form-group mt-3">
            <label class="mb-1">Valor do imóvel (Inteiro)*</label>
            <input class="form-control" type="number" placeholder="R$" min="1" required>
          </div>
          <div class="form-group my-3">
          <div class="form-group d-flex w-100 justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg w-50">Enviar</button>
          </div>
        </form>
    </div>

    <script src="./public/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>