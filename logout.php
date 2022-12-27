<?php
$_SESSION = [];
session_destroy(); //Destruimos sesion

include './include/header.php';
header('Location: index.php');         // Redireccion a pagina inicial
include './include/footer.php';
?>