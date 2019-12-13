<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="imagem/png" href="img/logowave.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/92f174b2ff.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Julius+Sans+One|Libre+Caslon+Display|Libre+Caslon+Text|Montserrat:400,700|Noto+Sans:400,700|Poiret+One|Reem+Kufi|Roboto+Mono:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi|Cutive+Mono|Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Loja | Wave</title>
  </head>
  <body style="margin: 0; padding: 0; font-family: 'GT Walsheim'; background: #f7f7f7">
    <?php include 'partes/cabecalho.php' ?>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active w-100 pt-5" style="background-image: url('img/colecao1.jpg'); background-size: cover">
          <!-- <video src="img/video9.mp4" autoplay loop class="position-absolute" style="background-size:; right: 0; left: 0; bottom: 0; min-width: 100%; min-height: 100%; width: auto; height: auto"></video> -->
          <div class="row align-items-center">
            <div class="col text-center align-self-center anime" style="color: #000; font-family: 'GT Walsheim', sans-serif;">
              <br><br>
              <span style="font-size: 25px;">lançamento</span><br>
              <span style="font-size: 25px; font-family: 'GT Walsheim Light'" >coleção de verão</span><br>
              <span>- - - - - - - - - - - - - - - - - - - -</span><br>
              <span style="font-family: 'Super Display', sans-serif; font-size: 55px;">AREIA</span><br>
              <span style="font-family: 'Super Display', sans-serif; font-size: 55px;" class="pb-5">E SAL</span><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- _________________FILTRAGEM COMPUTADOR________________ -->

    <div class="container-fluid">
      <div class="row pl-5 pr-5 pt-5 filtros_pc">
        <span class="pl-4 pr-3" style="font-size: 13px;">Agilize sua busca:</span>
        <div class="dropdown">
        <span class="pl-2 pr-3" style="font-size: 13px; font-weight: 400; cursor: pointer; color: #292929" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> CATEGORIA <i class="fas fa-caret-down"></i></span>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a style="font-size: 13px" class="dropdown-item">blusa</a>
            <a style="font-size: 13px" class="dropdown-item">body</a>
            <a style="font-size: 13px" class="dropdown-item">calçados</a>
            <a style="font-size: 13px" class="dropdown-item">casaco</a>
            <a style="font-size: 13px" class="dropdown-item">macacão</a>
            <a style="font-size: 13px" class="dropdown-item">saia</a>
            <a style="font-size: 13px" class="dropdown-item">short</a>
            <a style="font-size: 13px" class="dropdown-item">vestido</a>
            <a style="font-size: 13px" class="dropdown-item">calça</a>
          </div>
        </div>
        <div class="dropdown">
          <span class="pl-2 pr-3" style="font-size: 13px; font-weight: 400; cursor: pointer; color: #292929" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PREÇO <i class="fas fa-caret-down"></i></span>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            <a style="font-size: 13px" class="dropdown-item">blusa</a>
            <a style="font-size: 13px" class="dropdown-item">body</a>
            <a style="font-size: 13px" class="dropdown-item">calçados</a>
            <a style="font-size: 13px" class="dropdown-item">casaco</a>
            <a style="font-size: 13px" class="dropdown-item">macacão</a>
            <a style="font-size: 13px" class="dropdown-item">saia</a>
            <a style="font-size: 13px" class="dropdown-item">short</a>
            <a style="font-size: 13px" class="dropdown-item">vestido</a>
            <a style="font-size: 13px" class="dropdown-item">calça</a>
          </div>
        </div>
      </div>
      <div class="text-center pt-5 filtros_cel">
        <div class="row mr-5 ml-5">
          <div class="col bordafiltro mr-5 ml-5 pt-2 pb-1" onclick="abrirFiltro()" style="cursor: pointer">
            <h4 style="color: #383838;"><i class="fas fa-filter"></i> FILTRO</h4>
          </div>
        </div>
      </div>
    </div>

    <!-- _____________________LISTAGEM DE PRODUTOS______________________-->

    <div class="container-fluid">
      <div id="Content" class="row w-100 pt-5 text-center pl-5 pr-4 ">
        
        
      </div>
    </div>

    <!-- _________________FILTRAGEM CELULAR______________________ -->

    <div class="vh-100 w-100 filtro_categorias_cel position-asolute" id="categoriaMenu" style="background-color: #f2f2f2;">
      <div class="row w-100 pt-3 pl-5 pr-3 pb-3" style="background-color: #f2f2f2; z-index: 40; position: fixed; top: 0">
        <div class="col text-left">
          <span style="color: #383838;"><i class="fas fa-filter"></i> FILTRO</span>
        </div>
        <div class="col text-right">
          <span style="color: #383838;" onclick="fecharFiltro()"><i class="fas fa-times"></i></span>
        </div>
      </div>
      <div class="container-fluid pt-5">
        <div class="row vw-100 pt-5 text-center">
          <div class="col">
            <p class="pl-3 pr-3" style="font-size: 13px;">Agilize sua busca:</p>
          </div>
        </div>
        <hr>
        <div class="row" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
          <div class="col pl-5 pt-2 pr-4">
            <p>Categoria</p>
            <div class="collapse" id="collapseExample5" style="background-color: #f2f2f2;">
              <div class="card card-body" style="background-color: #f2f2f2;">
                <a style="font-size: 13px" class="dropdown-item">blusa</a>
                <a style="font-size: 13px" class="dropdown-item">body</a>
                <a style="font-size: 13px" class="dropdown-item">calçados</a>
                <a style="font-size: 13px" class="dropdown-item">casaco</a>
                <a style="font-size: 13px" class="dropdown-item">macacão</a>
                <a style="font-size: 13px" class="dropdown-item">saia</a>
                <a style="font-size: 13px" class="dropdown-item">short</a>
                <a style="font-size: 13px" class="dropdown-item">vestido</a>
                <a style="font-size: 13px" class="dropdown-item">calça</a>
              </div>
            </div>
          </div>
          <div class="col pl-5 pt-2 pr-5 text-right">
            <i class="fas fa-caret-down"></i>
          </div>
        </div>
        <hr>
        <hr>
        <div class="row" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">
          <div class="col pl-5 pt-2 pr-5">
            <p>Preço</p>
            <div class="collapse" id="collapseExample7" style="background-color: #f2f2f2;">
              <div class="card card-body" style="background-color: #f2f2f2;">
                <a style="font-size: 13px" class="dropdown-item">R$50,00</a>
                <a style="font-size: 13px" class="dropdown-item">R$100,00</a>
                <a style="font-size: 13px" class="dropdown-item">R$150,00</a>
                <a style="font-size: 13px" class="dropdown-item">R$200,00</a>
                <a style="font-size: 13px" class="dropdown-item">R$250,00</a>
                <a style="font-size: 13px" class="dropdown-item">R$300,00</a>
                <a style="font-size: 13px" class="dropdown-item">R$350,00</a>
              </div>
            </div>
          </div>
          <div class="col pl-5 pt-2 pr-5 text-right">
            <i class="fas fa-caret-down"></i>
          </div>
        </div>
        <hr>
      </div>
    </div>
    <?php 
      include 'partes/footer.php';
      include 'partes/provider.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
    <script src="js/colection.js"></script>
  </body>
