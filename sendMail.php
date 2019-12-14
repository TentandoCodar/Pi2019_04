<?php 
    require 'partes/functions.php';
    $senderEmail,$emailReceive,$subject,$message
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
        email('wavestoretcc@gmail.com',$_POST['email'], 'Ola ';$_POST['name'] , $_POST['msg'] );
        
    }
    else {
        echo "Preencha os dados corretamente";
    }
    email()

?>