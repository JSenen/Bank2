<?php
require_once('./model/Customer.php');
require_once('./model/Account.php');

//Creamos un cliente y cuentas de prueba
$accounts = [new Account('ES3045678912','Debito', 1267.5),
    new Account('ES0937568235','Inversion',3487.67)];
$costumer1 = new Customer('User','userfirst','userlast','juan@email.com',"1111",$accounts);
?>

<!-- FORMULARIO DE LOGIN -->
<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z]+" required />
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

    //Condicion usuario y password correspodan con los que tenemos
    if ($username == $costumer1->name && $password == $costumer1->password) {
        echo '<div class="message_login"><div><p class="success"><a href="account.php">LOGIN CORRECTO pulse aqui</a></p></div></div></p>';
        session_start(); //Inicio de sesion
        //Asociamos sesion al nombre de usuario
        $_SESSION['name'] = $costumer1->getName(); //Damos nombre de usuario como valor de una campo de session
        setcookie('BANK2_COKKIE','',86400); //Establecemos una cokkie de 1 dia
    }else{
        session_write_close(); //Borramos sesiones anteriores
        echo '<div class="message_login"><div><p class="error">LOGIN INCORRECTO</p></div></div></p>';
    }
}


?>


