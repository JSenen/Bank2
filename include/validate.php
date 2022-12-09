<?php
function validate_mail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $email;
    }else{
       return '';}
}
function validate_asunto($asunto){
    if(strlen(trim($asunto)) == 0) {
        return  '';
    }else{
        return $asunto;
    }
}
function validate_consulta($consulta){
    if(strlen(trim($consulta)) == 0) {
        return '';
    }else{
        return $consulta;
    }
}

