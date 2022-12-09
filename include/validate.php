<?php
// Funciones de validacion de los campos del formulario de consulta
function validate_mail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {     //Valida mail
        return $email;
    }else{
       return '';}
}
function validate_asunto($asunto){                          //Valida campo asunto sea mayor de 4 caracteres
    if(strlen(trim($asunto)) <=4 ) {
        return  '';
    }else{
        return $asunto;
    }
}
function validate_consulta($consulta){                     ////Valida campo asunto sea mayor de 10 caracteres
    if(strlen(trim($consulta)) <= 10) {
        return '';
    }else{
        return $consulta;
    }
}

