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
    <title>Cadastrar Cliente | Wave</title>
  </head>
  <body style="font-family: 'GT Walsheim'; color: #000; background-image: linear-gradient(60deg, #f2f2f2, #f2f2f2);">
    <?php include 'partes/cabecalho.php' ?>

    <div class="pt-5 text-center w-100">
      <div class="pt-5 mr-5 ml-5">
        <br>
        <h2 style="color: #000; font-weight: 700; font-family: 'GT Walsheim'">CADASTRAR FRANQUIA</i></h2>
      </div>
      <div class="row pt-5 ml-5 mr-5 mt-5 mb-5 form_style">
        <div class="col">
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Nome</span><br>
              <input id="name" type="text" name="" value="" class="inputadmin2" placeholder="Nome">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>Email</span><br>
              <input id="email" type="text" name="" value="" class="inputadmin2" placeholder="Email">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <span>Telefone</span><br>
              <input id="phone" type="text" name="" value="" class="inputadmin2" placeholder="Telefone">
            </div>
            <div class="col-sm pt-5 pb-5">
              <span>CNPJ</span><br>
              <input id="cnpj" type="text" name="" value="" class="inputadmin2" placeholder="CNPJ">
            </div>
          </div>
          <div class="row">
            <div class="col-sm pt-5 pb-5">
              <button id="signUpClientButton" type="button" name="button" class="botao_menu2">CADASTRAR</button>
              <button id="signUpClientButton" type="button" name="button" class="botao_menu2 mt-4" onclick="entrarClientes()">CANCELAR</button>
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



    <script src="js/class/Client.js"></script>
    <script src="js/signUpClient.js"></script>
  </body>
</html>
