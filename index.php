<?php

setcookie('Bank2', time() + 86400 * 30); //Establecemos una cookie de 30 dias
include './include/header.php';
include './include/session.php';
include "./include/footer.php";
