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
    <title>Franquias | Wave</title>
  </head>
  <body style="font-family: 'GT Walsheim'; color: #000; background-image: linear-gradient(60deg, #f2f2f2, #f2f2f2);" class="" id="body">
    <?php include 'partes/cabecalho.php' ?>
    <div class="pl-4 pr-4 pt-3 pb-3 botao_more" onclick="abrirCadastroCliente()" id="button_more">
      <i class="fas fa-plus" ></i>
    </div>
    <div class="pl-4 pr-4 pt-3 pb-3 botao_menos" onclick="fecharOpcoes()" id="button_menos">
      <i class="fas fa-times"></i>
    </div>

    <!-- ___________________LISTAGEM DE CLIENTES______________________ -->

    <div class="pt-5 text-center pb-5" style="background-image: linear-gradient(60deg, #f2f2f2, #f2f2f2);">
      <div class="pt-5 pb-5">
        <div class="pt-5 pb-5">
          <h1 style="color: #000; font-weight: 700; font-family: 'GT Walsheim'">FRANQUIAS</h1>
        </div>
        <input id="searchValue" type="text" name="" value="" class="inputadmin2 ml-3" style="" placeholder="Pesquise um usuário aqui"/>
        <i id="searchButton" class="fas fa-search pr-4" style="font-size: 23px; cursor: pointer; color: #000;"></i>
      </div>
      <div class="pt-1 pb-3">
        <p>Filtre sua busca</p>
        <select name="" id="bucket">
          <option value="code">Código</option>
          <option value="email">Email</option>
          <option value="name">Nome</option>
        </select>
      </div>
      <div id="Content" style="overflow:hidden" class="pb-5 pl-2">

      </div>

    </div>

    <!-- ________________MODAL COM INFO DOS CLIENTES_____________________ -->

    <div class="container-fluid position-fixed vh-100 vw-100 modal_admin" id="modal_products">
      <div class="row h-100 pt-4 pb-3 align-items-center style_modal text-center">
        <i class="fas fa-times position-absolute icone_modal" onclick="fecharModalProducts()"></i>
        <div id="ModalDataContent" class="col pl-5 pr-5 pt-5 pb-5">
          <h1 id="UserEmail" class="pl-3 pr-3 text_modal_titulo"></h1>
          <div class="pt-5">
            <span class="pt-2">email:</span>
            <p id="UserName" class="text_modal_texto"></p>
            <span class="pt-2">codigo:</span>
            <p id="UserCode" class="text_modal_texto"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid position-fixed vh-100 vw-100 escurecer" id="escurecer"></div>



    <script src="js/functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
      require 'partes/provider.php';
      require 'partes/adminProvider.php';
    ?>
    <script src="js/class/Client.js"></script>
    <script src="js/adminClient.js"></script>
  </body>
</html>
