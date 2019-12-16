<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="imagem/png" href="img/logowave.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/92f174b2ff.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Alatsi|Cutive+Mono|Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastrar Ficha Técnica | Wave</title>
  </head>
  <body style="font-family: 'GT Walsheim'; color: #000; background-image: linear-gradient(60deg, #f2f2f2, #f2f2f2);">
    <?php include 'partes/cabecalho.php' ?>



    <div class="pt-5 text-center w-100">
      <div class="pt-5 mr-5 ml-5">
        <br>
        <h2 style="color: #000; font-weight: 700; font-family: 'GT Walsheim'">CADASTRAR FICHA TÉCNICA</i></h2>
      </div>
      <div class="row pt-5 ml-5 mr-5 mt-5 mb-5 form_style">
        <div class="col">
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Nome da Peça</span><br>
              <input id="name" type="text" name="" value="" class="inputadmin2" placeholder="Nome da Peça">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Descrição da Peça</span><br>
              <input id="description" type="text" name="" value="" class="inputadmin2" placeholder="Descrição da Peça">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Categoria</span><br>
              <select id="type">
                <option value="blouse">blusa</option>
                <option value="body">body</option>
                <option value="shoe">calçados</option>
                <option value="coat">casaco</option>
                <option value="overall">macacão</option>
                <option value="skirt">saia</option>
                <option value="short">short</option>
                <option value="dress">vestido</option>
                <option value="pants">calça</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Referencia</span><br>
              <input disabled id="code" type="text" name="" value="" class="inputadmin2" placeholder="Referencia">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Data</span><br>
              <input disabled id="date" type="text" name="" value="" class="inputadmin2" placeholder="Data">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-3">
              <h3 style="color: #000; font-weight: 700; font-family: 'GT Walsheim'">IMAGENS DO PRODUTO</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Imagem Frontal</span><br>
              <input id="file1" type="file" name="" value="" class="input_file" placeholder="Descrição da Peça">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Imagem Posterior</span><br>
              <input id="file2" type="file" name="" value="" class="input_file" placeholder="Descrição da Peça">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <h3 style="color: #000; font-weight: 700; font-family: 'GT Walsheim'">PRODUTO</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Numero de Produtos</span><br>
              <input id="productAmount" type="text" name="" value="" class="inputadmin2" placeholder="Numero de Produtos">
            </div>

            <div  class="col-sm pt-5 pb-5">
              <!-- VALOR FIXO -->
              <button id="AmountSelectButton" class="botao_menu2">SETAR</button>
            </div>
          </div>
          <div class="row" id="ProductsSelect">

          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-3">
              <h3 style="color: #000; font-weight: 700; font-family: 'GT Walsheim'">FRANQUIAS</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Lacre 1</span><br>
              <input id="seal1" type="text" name="" value="" class="inputadmin2" placeholder="Lacre 1">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Lacre 2</span><br>
              <input id="seal2" type="text" name="" value="" class="inputadmin2" placeholder="Lacre 2">
            </div>
          </div>
          <div class="row">

            <div class="col-sm pt-5 pb-5">
              <span>Lacre 3</span><br>
              <input id="seal3" type="text" name="" value="" class="inputadmin2" placeholder="Lacre 3">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Modelista</span><br>
              <input id="modelist" type="text" name="" value="" class="inputadmin2" placeholder="Modelista">
            </div>
          </div>


          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Observações</span><br>
              <input id="observations" type="text" name="" value="" class="inputadmin2" placeholder="Observações">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Horas trabalhadas</span><br>
              <input id="hourAmount" type="text" name="" value="" class="inputadmin2" placeholder="Horas trabalhadas">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <!-- VALOR FIXO -->
              <span>Custo de Mão-De-Obra (por peça)</span><br>
              <input disabled id="laborCost" type="text" name="" value="" class="inputadmin2" placeholder="Custo de Mão-De-Obra (por peça)">
            </div>
            <div class="col-sm pt-5 pb-5">
              <!-- VALOR FIXO -->
              <span>Preço de Custo</span><br>
              <input disabled id="priceCost" type="text" name="" value="" class="inputadmin2" placeholder="Preço de Custo">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <!-- VALOR FIXO -->
              <span>Divisor Padrão</span><br>
              <input disabled id="standartDivisor" type="text" name="" value="" class="inputadmin2" placeholder="Divisor Padrão">
            </div>
            <div class="col-sm pt-5 pb-5">
              <!-- VALOR FIXO -->
              <span>Preço de Venda</span><br>
              <input disabled id="salePrice" type="text" name="" value="" class="inputadmin2" placeholder="Preço de Venda">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <button id="submitButton" type="button" name="button" class="botao_menu2">CADASTRAR</button>
              <button id="signUpClientButton" type="button" name="button" class="botao_menu2 mt-4" onclick="entrarFicha()">CANCELAR</button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php
      require 'partes/provider.php';
      require 'partes/adminProvider.php';
      require 'partes/dadoincorreto.php';
    ?>
    <script src="js/functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/class/Ficha.js"></script>
    <script src="js/class/Product.js"></script>
    <script src="js/signUpFicha.js"></script>
  </body>
</html>
