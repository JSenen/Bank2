<?php
session_start();

?>
<nav class="navegacion">
        <a href="#" >Inicio</a>
        <a href="#" >Enviar Email</a>
        <a href="logout.php">Login Out <?php echo $_SESSION['name'] ?></a>
</nav>

