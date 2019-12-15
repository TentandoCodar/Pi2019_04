<?php 
    require 'partes/functions.php';
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $msg = $_POST['msg'];
        email('wavestoretcc@gmail.com','', 'Email por'.$name , $msg );
        email($email, '', 'Obrigado'.$name, 'Aguarde, responderemos sua mensagem assim que possivel');
        header('Location: emailSuccess.php');
        
    }
    else {
        header('Location: emailError.php');
    }
    email()

?>