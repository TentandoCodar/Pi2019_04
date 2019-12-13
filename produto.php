<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="imagem/png" href="img/logowave.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/92f174b2ff.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Vidaloka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Josefin+Sans:700|La+Belle+Aurore|Major+Mono+Display|Poppins|Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Julius+Sans+One|Libre+Caslon+Display|Libre+Caslon+Text|Montserrat:400,700|Noto+Sans:400,700|Poiret+One|Reem+Kufi|Roboto+Mono:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi|Cutive+Mono|Raleway:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Josefin+Sans:700|La+Belle+Aurore|Major+Mono+Display|Poppins|Righteous&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Produto | Wave</title>
  </head>
  <body style="background: #f2f2f2; font-family: 'GT Walsheim';">

    <i class="fas fa-times position-absolute" style="top: 30px; right: 30px; font-size: 23px; color: #000; cursor: pointer; z-index: 30" onclick="fecharProduto()"></i>

    <div class="container-fluid vh-100">
      <div class="row h-100 align-items-center">
        <div class="col-sm text-center">
          <div  class="display_info">
            <!-- NOME -->
            <p id="Name" style="font-size: 50px; font-family: 'super display'" class="pt-4">Nome</p>
            <!-- PREÇO -->
            <p id="Price" class="pb-3">R$ 100000,00</p>
          </div>
          <img id="ProductImage" src="img/moca2.jpg" alt="" class="img-fluid img_produto">
        </div>
        <div class="col-sm coluna_produtos">
          <div id="Display_cel" class="display_info2">
            <!-- NOME -->
            <p id="Name_cel" style="font-size: 50px; font-family: 'super display'">Nome</p>
            <!-- PREÇO -->
            <p id="Price_cel" class="pb-3">R$ 100000,00</p>
          </div>
          <!-- DESCRIÇÃO -->
          <p id="Description" class="pb-5 descricao_produto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          <p>Tamanhos disponíveis</p>
          <div class="tamanho_produtos" style="overflow: hidden">
            <p class="ml-1 mr-1 pt-1 pb-1 tamanho" style="font-size: 13px">PP</p>
            <p class="ml-1 mr-1 pt-1 pb-1 tamanho" style="font-size: 13px">P</p>
            <p class="ml-1 mr-1 pt-1 pb-1 tamanho" style="font-size: 13px">M</p>
            <p class="ml-1 mr-1 pt-1 pb-1 tamanho" style="font-size: 13px">G</p>
            <p class="ml-1 mr-1 pt-1 pb-1 tamanho" style="font-size: 13px">GG</p>
          </div>

          <p class="pt-4" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2" style="cursor: pointer">
            Composição de medidas <i class="fas fa-caret-down position-absolute icon_produto"></i>
          </p>
          <div id="rawMaterial" class="collapse collapse_produto pb-5" id="collapseExample2">
            <div class="card card-body">
              <!-- MATERIAL UTILIZADO -->
              Material Utilizado
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
    ?>
    <script src="js/product.js"></script>
  </body>
</html>
