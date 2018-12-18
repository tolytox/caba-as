<?php
/*if (isset($_REQUEST['nombre'],$_REQUEST['email'])) {

    /* $firstname = $_REQUEST['nombre'];
     $lastname = $_REQUEST['telefono'];
     $email = $_REQUEST['email'];
     $message = $_REQUEST['mensaje'];

     // Set your email address where you want to receive emails.
     $to = 'test@massimoproducciones.cl';

     $subject = 'Contacto | Pagina Web';
     $headers = "From: ".$firstname." <".$email."> \r\n";

     $send_email = mail($to,$subject,$message,$lastname,$headers);

     var_dump($send_email);  */
    //echo ($send_email) ? 'success' : 'error';

   /* $to      = 'test@massimoproducciones.cl';
    $subject = 'Contacto | Pagina Web';
    $firstname = $_REQUEST['nombre'];
    $lastname = $_REQUEST['telefono'];
    $email = $_REQUEST['email'];
    $message =
        "Nombre :".$_REQUEST['nombre']. "\n" .
        "Telefono :".$_REQUEST['telefono']. "\n" .
        "Email :".$_REQUEST['email']. "\n" .
        "Mensaje :".$_REQUEST['mensaje'];
    $headers = 'From: webmaster@massimoproducciones.cl' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $send_email = mail($to, $subject, $message , $headers);
    echo "<script language='javascript'>\n";
    echo "  alert('Mensaje enviado con exito!')";
    echo "</script>\n";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    echo ($send_email) ? 'success' : 'error';
    exit;
}*/

if ($_POST) {
   $to      = 'tomas.ortega.aa@gmail.com';
    $subject = 'Contacto | Pagina Web';
    $firstname = $_REQUEST['nombre'];
    $lastname = $_REQUEST['telefono'];
    $email = $_REQUEST['email'];
    $message =
        "Nombre :".$_REQUEST['nombre']. "\n" .
        "Telefono :".$_REQUEST['telefono']. "\n" .
        "Email :".$_REQUEST['email']. "\n" .
        "Mensaje :".$_REQUEST['mensaje'];
    $headers = 'From: tomas.ortega.aa@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $send_email = mail($to, $subject, $message , $headers);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    echo "<script language='javascript'>\n";
    echo "  alert('Mensaje enviado con exito!')";
    echo "</script>\n";
    window.location.replace("https://tolytox.github.io/caba-as/");
    
    header("Location: www.tolytox.github.io/caba-as/");
    die();
    exit;
}
?>