<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="imagem/png" href="img/logowave.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/92f174b2ff.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi|Cutive+Mono|Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Admnistrador | Wave</title>
  </head>
  <body style="font-family: 'GT Walsheim'; background: #f2f2f2">
    <?php include 'partes/cabecalho.php' ?>
    <div class="espacodecima">
      <br><br><br>
    </div>
    <div class="container-fluid vh-100 text-center">
      <div class="row h-100 align-items-center">
        <div class="col">
          <div class="row align-items-end">
            <div class="col-sm rounded pt-5 pb-5 pl-2 pr-2 mr-3 ml-3 mb-3 mt-3 card_admin" onclick="entrarClientes()">
              <i class="fas fa-store"></i>
              <h5 class="">Franquias.</h5>
            </div>
            <div class="col-sm rounded pt-5 pb-5 pl-2 pr-2 mr-3 ml-3 mb-3 mt-3 card_admin" onclick="entrarFuncionario()">
              <i class="fas fa-hard-hat"></i>
              <h5 class="">Funcionários.</h5>
            </div>
            <div class="col-sm rounded pt-5 pb-5 pl-2 pr-2 mr-3 ml-3 mb-3 mt-3 card_admin" onclick="entrarFornecedores()">
              <i class="fas fa-truck"></i>
              <h5 class="">Fornecedores.</h5>
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col-sm rounded pt-5 pb-5 pl-2 pr-2 mr-3 ml-3 mb-3 mt-3 card_admin" onclick="entrarProdutos()">
              <i class="fas fa-shopping-bag"></i>
              <h5 class="">Insumos.</h5>
            </div>
            <div class="col-sm rounded pt-5 pb-5 pl-2 pr-2 mr-3 ml-3 mb-3 mt-3 card_admin" onclick="entrarFicha()">
              <i class="far fa-address-card"></i>
              <h5 class="">Fichas.</h5>
            </div>
            <div class="col-sm rounded pt-5 pb-5 pl-2 pr-2 mr-3 ml-3 mb-3 mt-3 card_admin" onclick="entrarCusto()">
              <i class="fas fa-coins"></i>
              <h5 class="">Custos.</h5>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="js/functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
      require 'partes/provider.php';
      require 'partes/adminProvider.php';

    ?>

  </body>
</html>
