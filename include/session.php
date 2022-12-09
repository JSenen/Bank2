<?php
require_once('./domain/Customer.php');
require_once('./domain/Account.php');

//Creamos un cliente y cuentas de prueba
$accounts = [new Account('ES3045678912','Debito', 1267.5),
             new Account('ES0937568235','Inversion',3487.67)];
$costumer1 = new Customer('User','userfirst','userlast','juan@email.com',"1111",$accounts);
?>
<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button>
</form>
<?php

//Validamos el login del formulario
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username == $costumer1->name && $password == $costumer1->password) {
        echo '<div class="message_login"><div><p class="success"><a href="account.php">LOGIN CORRECTO pulse aqui</a></p></div></div></p>';
        session_start(); //Inicio de sesion
        $_SESSION['name'] = $costumer1->name; //Asociamos sesion al nombre de usuario
        setcookie('BANK2_COKKIE','',86400);
    }else{
        session_write_close(); //Borramos sesiones anteriores
        echo '<div class="message_login"><div><p class="error">LOGIN INCORRECTO</p></div></div></p>';
    }
}



?>


