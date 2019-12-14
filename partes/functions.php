<?php
require 'PHPMailer/PHPMailerAutoload.php';



function email($senderEmail,$emailReceive,$subject,$message){


	$Mailer = new PHPMailer();

	//Define que será usado SMTP
	$Mailer->IsSMTP();

	//Enviar e-mail em HTML
	$Mailer->isHTML(true);

	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';

	//Configurações
	$Mailer->SMTPAuth = true;
	$Mailer->SMTPSecure = 'tls';

	//nome do servidor
	$Mailer->Host = "ssl://smtp.gmail.com";
	//Porta de saida de e-mail
	$Mailer->Port = 465;

	//Dados do e-mail de saida - autenticação
	$Mailer->Username = $senderEmail;
	$Mailer->Password = '1234cdgr';

	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = $senderEmail;

	//Nome do Remetente
	$Mailer->FromName = 'Teste';

	//Assunto da mensagem
	$Mailer->Subject = $subject;


	//Corpo da Mensagem
	$Mailer->Body = $message;

	//Corpo da mensagem em texto
	$Mailer->AltBody = $message;

	//Destinatario
	$Mailer->AddAddress($senderEmail);

	if($Mailer->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
}




function _header(){
    session_start();

    if(!isset($_SESSION['Login'])){
      echo '
      <header>

        <nav class="navbar navbar-expand-lg navbar-dark verde">
            <a class="navbar-brand" href="index.php"> <img src="imgs\logos\Tmod18_Logo_Egipcia2.png" height="30px" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="nos.php">Quem somos</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="artigos.php">Artigos</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contato.php">Fale Conosco</a>
                </li>


              </ul>

              <div class="my-2 my-lg-0">
                <a href="login.php" class="btn btn-outline-light" role="button" aria-pressed="true">Login</a>
              </div>

            </div>
          </nav>
      </header>



      ';
    }
    else{
      echo '
      <header>

        <nav class="navbar navbar-expand-lg navbar-dark verde">
            <a class="navbar-brand" href="index.php"> <img src="imgs\logos\Tmod18_Logo_Egipcia2.png" height="30px" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="nos.php">Quem somos</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="artigos.php">Artigos</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contato.php">Fale Conosco</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="acervo.php">Acervo</a>
                </li>


              </ul>

              <div class="my-2 my-lg-0">
                <a href="authLogout.php" class="btn btn-outline-light" role="button" aria-pressed="true">Logout</a>
              </div>

            </div>
          </nav>
      </header>



      ';
  }
}

 ?>
