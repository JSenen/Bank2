<?php
//funcion para envio de mail
function sendmail($emailuser,$asunto,$consulta){
    ini_set( 'display_errors', 1 ); //Avisará de error si no se ejecuta
    error_reporting( E_ALL );

    $date = date('d-m-Y');           //Recuperamos fecha actual en formato dia-mes-año
    $to = "Bank2@bank.es";                  //Destinatario
    $subject = $asunto;                     //Asunto
    $message = $consulta                 ;  //Consulta
    $headers = "Date:" . $date;             //Adjuntamos fecha
    $headers .= "From: webpage";
    $headers .= "User mail ".$emailuser;     //Añadimos datos concatenados por punto (.=)
    mail($to,$subject,$message, $headers);  //Funcion de envio
    echo '<div class="message_login"><div><p class="success">EMAIL ENVIADO</p></div></div></p>';
}

?>


