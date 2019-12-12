<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="imagem/png" href="img/logowave.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/92f174b2ff.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Vidaloka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi|Cutive+Mono|Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tendências | Wave</title>
  </head>
  <body style="font-family: 'GT Walsheim'; overflow-x: hidden; background: #f2f2f2; color: #000">

    <?php include 'partes/cabecalho.php' ?>
    <div class="container-fluid vh-100 position-fixed" style="top: 0px; left: 0px">
      <div class="row h-100 text-center">
        <div class="col align-self-end pb-2">
          <div class="pt-5 linksociais">
            <span class="pl-2 pr-2">Instagram</span><span class="pl-2 pr-2">Twitter</span><span class="pl-2 pr-2">Facebook</span>
          </div>
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
    <div class="container-fluid vh-100 position-fixed zindex" id="zindexBody">
      <div class="row h-100 text-center">
        <div class="col align-self-center">
          <img src="img/moca.jpg" alt="" class="img-fluid img_tendencia" id="image_body">
        </div>
      </div>
    </div>
    <div class="container-fluid vh-100 position-fixed zindex" id="zindexBralette">
      <div class="row h-100 text-center">
        <div class="col align-self-center">
          <img src="img/moca2.jpg" alt="" class="img-fluid img_tendencia" id="image_bralette">
        </div>
      </div>
    </div>
    <div class="container-fluid vh-100 position-fixed zindex" id="zindexCores">
      <div class="row h-100 text-center">
        <div class="col align-self-center">
          <img src="img/moca.jpg" alt="" class="img-fluid img_tendencia" id="image_cores">
        </div>
      </div>
    </div>
    <div class="container-fluid vh-100 position-fixed zindex" id="zindexJeans">
      <div class="row h-100 text-center">
        <div class="col align-self-center">
          <img src="img/moca.jpg" alt="" class="img-fluid img_tendencia" id="image_jeans">
        </div>
      </div>
    </div>
    <div class="container-fluid vh-100 position-fixed zindex" id="zindexNeon">
      <div class="row h-100 text-center">
        <div class="col align-self-center">
          <img src="img/moca.jpg" alt="" class="img-fluid img_tendencia" id="image_neon">
        </div>
      </div>
    </div>
    <div class="container-fluid vh-100 position-fixed zindex" id="zindexListras">
      <div class="row h-100 text-center">
        <div class="col align-self-center">
          <img src="img/moca.jpg" alt="" class="img-fluid img_tendencia" id="image_listras">
        </div>
      </div>
    </div>
    <div class="container-fluid vh-100 text-center">
      <div class="row h-100 align-items-center">
        <div class="col-sm col_tendencias1">
          <div class="text_tendencia" onmouseover="bodyimageOpen()" onclick="textBody()" onmouseout="bodyimageClose()" id="body">
            <span style="font-size: 14px">01</span><span>Body.</span><br>
          </div>
          <div class="text_tendencia" onmouseover="braletteimageOpen()" onclick="textBralette()" onmouseout="braletteimageClose()" id="bralette">
            <span style="font-size: 14px">02</span><span>Bralette.</span><br>
          </div>
          <div class="text_tendencia" onmouseover="coresimageOpen()" onclick="textCores()" onmouseout="coresimageClose()" id="cores">
            <span style="font-size: 14px">03</span><span>Cores.</span><br>
          </div>
        </div>
        <div class="col-sm col_tendencias2">
          <div class="text_tendencia" onmouseover="jeansimageOpen()" onclick="textJeans()" onmouseout="jeansimageClose()" id="jeans">
            <span style="font-size: 14px">04</span><span>Jeans.</span><br>
          </div>
          <div class="text_tendencia" onmouseover="neonimageOpen()" onclick="textNeon()" onmouseout="neonimageClose()" id="neon">
            <span style="font-size: 14px">05</span><span>Neon.</span><br>
          </div>
          <div class="text_tendencia" onmouseover="listrasimageOpen()" onclick="textListras()" onmouseout="listrasimageClose()" id="listras">
            <span style="font-size: 14px">06</span><span>Listras.</span><br>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid position-fixed vh-100 vw-100 modal_tendencia" id="modal_tendencia">
      <div class="row h-100 pt-4 pr-4 pt-3 pb-3 align-items-center style_modal_tendencia">
        <i class="fas fa-times position-absolute pt-5 pr-5 icone_modal_tendencias"  onclick="fecharModalTendencias()"></i>
        <div class="col pl-5 pr-5 pt-5 pb-5">
          <p style="" class="pl-3 pr-3 text_modal_tendencias_titulo" id="text_ID"></p>
          <p class="pl-3 pr-3 text_modal_texto" id="text_description_ID"></p>
        </div>
      </div>
    </div>
    <div class="container-fluid position-fixed vh-100 vw-100 escurecer" id="escurecer"></div>

    <script src="js/functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
