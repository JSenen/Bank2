<?php
function sendmail($emailuser,$asunto,$consulta){
    ini_set( 'display_errors', 1 ); //Avisará de error si no se ejecuta
    error_reporting( E_ALL );

    $date = date('d-m-Y');          //Recuperamos fecha actual en formato dia-mes-año
    $to = "test@hostinger.com";             //Destinatario
    $subject = "Checking PHP mail";         //Asunto
    $message = "PHP mail works just fine";  //Consulta
    $headers = "Date:" . $date;             //Adjuntamos fecha
    $headers .= "From: webpage";            //Añadimos datos concatenados por .
    mail($to,$subject,$message, $headers);  //Funcion de envio
    echo '<div class="message_login"><div><p class="success">EMAIL ENVIADO</p></div></div></p>';
}

?>


