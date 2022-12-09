<?php
session_start();

?>
<nav class="navegacion">
        <a href="#" class="navegacion--activo">Inicio</a>
        <a href="/logout.php">Login Out <?php echo $_SESSION['name'] ?></a>
</nav>

