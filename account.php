<?php
include './domain/Customer.php';
include './domain/Account.php';

include './include/header.php'; //Incluimos cabecera
include './include/nav.php';    //Incluimos menu navegación

//Al trabajar sin base de datos, usamos los mismos objetos que el inicio de sesion.
$accounts = [new Account('ES3045678912','Debito', 1267.5),
    new Account('ES0937568235','Inversion',0.34)];
$costumer1 = new Customer('User','userfirst','userlast','juan@email.com',"1111",$accounts);
?>
<div class="account_page">
        <h2>Usuario Registrado: <b><?= $_SESSION['name'] ?></b></h2> <!-- //Obtenemos el usuario de la $_SESSION -->
        <div>
            <table>
                <tr>
                    <th>Account Number</th>
                     <th>Account Type</th>
                     <th>Balance</th>
                </tr>

    <?php foreach ($costumer1->accounts as $account) { ?>
                 <tr>
                     <td><?= $account-> accountnumber ?></td>
                     <td><?= $account->type ?></td>
            <?php if ($account->getBalance() >= 0) { //Si es mayor de 0 lo pinta verde
                ?>
                     <td class="credit">
                <?php } else {                        //Si no rojo
                ?>
                    <td class="withdraw">
                <?php } ?>
                $ <?= $account->getBalance() ?></td>
        </tr>
    <?php } ?>

            </table>
    </div>


</div>

<?php
include "./include/footer.php";
?>


