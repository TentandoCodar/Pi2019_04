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
  <body style="background: #f2f2f2; font-family: 'GT Walsheim'">

    <?php include 'partes/cabecalho.php' ?>
    <div class="container-fluid h-100 text-center pt-5 footer_pc">
      <div class="row pt-5 pl-5 pr-5" style="height: 50%">
        <div class="col-sm-12 card_admin pt-5 pb-5 pl-5 pr-5 mt-3 mb-3">
          <h1>Temperatura</h1>
          <iframe height="300px" width="500px" src='https://thingspeak.com/channels/756771/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&width=auto&height=auto&color=20B2AA&bgcolor=FFFFFF&offset=-3&yaxis= &xaxis= &title= '></iframe>
        </div>
        <div class="col-sm-12 card_admin pt-5 pb-5 pl-5 pr-5 mt-3 mb-3">
          <h1>Luminosidade</h1>
          <iframe height="300px" width="500px" src='https://thingspeak.com/channels/756771/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15&width=auto&height=auto&color=20B2AA&bgcolor=FFFFFF&offset=-3&yaxis= &xaxis= &title= '></iframe>
        </div>
      </div>
      <div class="row pl-5 pr-5" style="height: 50%">
        <div class="col-sm-12 card_admin pt-5 pb-5 pl-5 pr-5 mt-3 mb-3">
          <h1>Umidade</h1>
          <iframe height="300px" width="500px" src='https://thingspeak.com/channels/756771/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15&width=auto&height=auto&color=20B2AA&bgcolor=FFFFFF&offset=-3&yaxis= &xaxis= &title= '></iframe>
        </div>
        <div class="col-sm-12 card_admin pt-5 pb-5 pl-5 pr-5 mt-3 mb-3">
          <h1>Wifi</h1>
          <iframe height="300px" width="500px" src='https://thingspeak.com/channels/756771/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15?width=373&height=auto&color=20B2AA&bgcolor=FFFFFF&yaxis= &xaxis= &title= '></iframe>
        </div>
      </div>
    </div>


    <!-- CELULAR -->

    <div class="container-fluid h-100 text-center pt-5 footer_cel">
      <div class="row pt-5 pl-5 pr-5" style="height: 50%">
        <div class="col-sm-12 card_admin pt-5 pb-5 pl-5 pr-5 mt-3 mb-3">
          <h1>Temperatura</h1>
          <iframe height="300px" width="300px" src='https://thingspeak.com/channels/756771/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&width=auto&height=auto&color=20B2AA&bgcolor=FFFFFF&offset=-3&yaxis= &xaxis= &title= '></iframe>
        </div>
        <div class="col-sm-12 card_admin pt-5 pb-5 pl-5 pr-5 mt-3 mb-3">
          <h1>Luminosidade</h1>
          <iframe height="300px" width="300px" src='https://thingspeak.com/channels/756771/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15&width=auto&height=auto&color=20B2AA&bgcolor=FFFFFF&offset=-3&yaxis= &xaxis= &title= '></iframe>
        </div>
      </div>
      <div class="row pl-5 pr-5" style="height: 50%">
        <div class="col-sm-12 card_admin pt-5 pb-5 pl-5 pr-5 mt-3 mb-3">
          <h1>Umidade</h1>
          <iframe height="300px" width="300px" src='https://thingspeak.com/channels/756771/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15&width=auto&height=auto&color=20B2AA&bgcolor=FFFFFF&offset=-3&yaxis= &xaxis= &title= '></iframe>
        </div>
        <div class="col-sm-12 card_admin pt-5 pb-5 pl-5 pr-5 mt-3 mb-3">
          <h1>Wifi</h1>
          <iframe height="300px" width="300px" src='https://thingspeak.com/channels/756771/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15?width=373&height=auto&color=20B2AA&bgcolor=FFFFFF&yaxis= &xaxis= &title= '></iframe>
        </div>
      </div>
    </div>




  <script src="js/functions.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
