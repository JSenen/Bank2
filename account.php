<?php
include './domain/Customer.php';
include './domain/Account.php';

include './include/header.php';
include './include/nav.php';

//Al trabajar sin base de datos, usamos los mismos objetos que el inicio de sesion.
$accounts = [new Account('ES3045678912','Debito', 1267.5),
    new Account('ES0937568235','Inversion',3487.67)];
$costumer1 = new Customer('User','userfirst','userlast','juan@email.com',"1111",$accounts);
?>
<div class="account_page">


        <h2>Usuario Registrado: <b><?= $costumer1->getFullName() ?></b></h2>
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
            <?php if ($account->getBalance() >= 0) { ?>
                     <td class="credit">
                <?php } else { ?>
                    <td class="overdrawn">
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


