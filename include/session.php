<?php
require_once('./domain/Customer.php');
require_once('./domain/Account.php');
session_start();

//Creamos un cliente y cuentas de prueba
$accounts = [new Account('ES3045678912','Debito', 1267.5),
             new Account('ES0937568235','Inversion',3487.67)];
$costumer1 = new Customer('Juanito','Garcia','Lopez','juan@email.com',"1234",$accounts);

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username == $costumer1->name && $password == $costumer1->password) {
        echo '<p class="error">LOGIN CORRECTO</p>';

    }
}
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

?>