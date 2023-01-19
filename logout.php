<?php
$_SESSION = [];
session_destroy(); //Destruimos sesion

include './view/header.php';
header('Location: index.php');         // Redireccion a pagina inicial
include './view/footer.php';
?>