<?php

    include "./include/header.php";
    include "./domain/Customer.php";
    include  "./domain/Account.php";

    // Creamos varios clientes y cuentas de prueba
    $account1 = [new Account('ES301234567921','Ahorro',2400),
                 new Account('ES543345756783','Inversion',1345.65)];
    $account2 = [new Account('ES123098456674','Deposito',175.45),
                new Account('ES999923423532','Credito',12765)];
    $customer1 = new Customer('Juan','Garcia','Saez','juanito@email.com','1234',$account1);
    $customer2 = new Customer('Maria', 'Lopez','Sastre','lamaria@email.com','4321',$account2);
?>

<?php
include "./include/footer.php";
?>
