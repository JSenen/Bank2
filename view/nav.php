<?php
session_start();  //Inicio de sesion usuario

?>
<!-- NAVEGADOR DE PAGINA HTML -->
<nav class="navegacion">
        <a href="#" >Inicio</a>
        <a href="account.php">Cuenta</a>
        <a href="formemail.php" >Enviar Email</a>
        <a href="logout.php">Login Out <?php echo $_SESSION['name'] ?></a>
</nav>

