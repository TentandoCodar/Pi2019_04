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
    <title>Home | Wave</title>
  </head>
  <body style="background: #f2f2f2" id="body">
    <?php include 'partes/cabecalho.php' ?>
    <?php include 'partes/help.php' ?>
    <div class="container-fluid vh-100" style="background: #f2f2f2">
      <div class="row h-100 align-items-center">
        <div class="container-fluid vh-100 position-absolute" style="top: 0px; left: 0px color: #fff; font-family: 'Raleway', sans-serif; z-index: 40;">
          <div class="row h-100 text-center align-items-center">
            <div class="col-sm flutuar text-right pr-5 mr-5 w-100">
              <p class="wavestore pr-4 mr-4 anime">Wave</p>
            </div>
            <div class="col-sm flutuar2 text-left pl-5 ml-5 w-100">
              <p class="wavestore2 pl-4 ml-4 anime">Store</p>
            </div>
          </div>
        </div>
        <div class="container-fluid vh-100 position-absolute" style="top: 0px; left: 0px">
          <div class="row h-100 text-center">
            <div class="col h-100 linha"> </div>
            <div class="col h-100"> </div>
          </div>
        </div>
        <div class="container-fluid vh-100 position-absolute" style="top: 0px; left: 0px">
          <div style="width: 100%; height: 50%;"></div>
          <div style="width: 100%; height: 50%; border-top: 1px solid #c9c3b8"></div>
        </div>
        <div class="container-fluid vh-100 position-absolute" style="top: 0px; left: 0px">
          <div class="row h-100 text-center">
            <div class="col align-self-center">
              <img src="img/moca.jpg" alt="" width="500" class="img-fluid image_responsive anime_img" style="z-index: 40">
              <div class="position-absolute justify-content-center w-100 title_responsive">
                <p class="wavestore anime_img2">Wave</p>
              </div>
              <div class="position-absolute justify-content-center w-100 title_responsive2">
                <p class="wavestore2 anime_img3">Store</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid vh-100 position-absolute" style="top: 0px; left: 0px">
          <div class="row h-100 text-center">
            <div class="col align-self-end pb-2">
              <div class="pt-5 linksociais anime_img">
                <span class="pl-2 pr-2">Instagram</span><span class="pl-2 pr-2">Twitter</span><span class="pl-2 pr-2">Facebook</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="position-absolute text-center circulo align-items-center" style="right: 10%; bottom: 10%;" onmouseover="abrirCirculo()" id="circulo1" onmouseout="fechaCirculo()" onclick="abrirLoja()">
      <p class="anime_img2">conheça nossa loja</p>
    </div>
    <div class="position-absolute text-center circulo align-items-center" style="left: 10%; bottom: 10%;" onmouseover="abrirCirculo2()" id="circulo2" onmouseout="fechaCirculo2()" onclick="abrirAbout()">
      <p class="anime_img3">entre em contato</p>
    </div>

    <div class="container-fluid" style="color: #000;">
      <div class="row">
        <div class="col-sm text-center pt-5" style="background: white; font-family: 'Super Display'">
          <span class="pt-5 text_responsive_index" >ROUPAS SELECIONADAS</span><br>
          <img src="img/moca2.jpg" alt="" class="img-fluid pb-3 pt-5 anime_img2" width="300px">
          <h1 class="anime">Areia e Sal</h1>
          <h5 class="pb-3 pt-3 anime">Roupa Bonita</h5>
          <div class="pr-5 text-center text_responsive_index2">
            <p style="font-size: 12px" class="pt-5 anime">DESIGN / SUMMER / STYLE / CHIQUESA / FASHION</p>
            <p class="mt-5 mb-5 anime" style="font-size: 14px">A nova coleção areia e sal expressa conforto, moda e beleza.</p>
            <h2 style="font-family: 'Super Display'; cursor: pointer" class="anime" onclick="abrirLoja()">Conferir</h2>
            <br><br>
          </div>
        </div>
        <div class="col-sm text_index text-left pt-3 parte_oculta">
          <div class="pr-5 coluna_index">
            <br>
            <p style="font-size: 12px" class="pt-3 anime">ROUPAS SELECIONADAS</p>
            <p class="pt-4 pb-4 anime" style="font-size: 30px; font-weight: bold">Areia e Sal</p>
            <p style="font-size: 12px" class="pt-2 anime">DESIGN / SUMMER / STYLE / CHIQUESA / FASHION</p>
            <p class="mt-5 mb-5 anime" style="font-size: 14px">A nova coleção areia e sal expressa conforto, moda e beleza.</p>
            <h2 style="font-family: 'Super Display'; cursor: pointer" class="anime" onclick="abrirLoja()">Conferir</h2>
          </div>
          <div class="anime_background">

          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm text-center pt-5 background_responsive">
          <div class="style_responsive">
            <span style="font-size: 12px" class="pt-5 text_responsive_index"></span><br>
          </div>
          <img src="img/moca3.jpg" alt="" class="img-fluid pt-5 anime_img2" width="300px">
          <div class="style_responsive pt-3">
            <h1 style="color: #000;" class="anime">Roupa</h1>
            <h5 class="pb-3 pt-3 anime">Roupa Bonita</h5>
          </div>
        </div>
        <div class="col-sm text_index text-left parte_oculta" style="font-family: 'GT Walsheim Light'; padding: 0; margin: 0">
          <div class="pr-5" style="height: 70%; padding-left: 30%; padding-right: 40%; background: #324664; color: #fff">
            <br><br>
            <p class="pt-4 pb-4 anime" style="font-size: 30px; font-weight: bold">Roupa</p>
            <p style="font-size: 12px" class="pt-5 anime">ROUPAS SELECIONADAS / SELECIONADO / ROUPA / DEUSES / FASHION / AGUENTO NÃO</p>
            <p class="mt-5 mb-5 anime" style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <h2 style="font-family: 'Super Display'; cursor: pointer" class="anime" onclick="abrirLoja()">Conferir</h2>
          </div>
          <div class="" style="height: 30%; background-image: url('img/moca3.jpg'); background-size: cover">
          </div>
        </div>
      </div>
    </div>

    <?php include 'partes/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
      require 'partes/provider.php';

    ?>
    <script src="js/index.js"></script>
    <script src="js/functions.js"></script>
  </body>
</html>
