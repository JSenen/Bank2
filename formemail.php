<?php

include './domain/Customer.php';
include './domain/Account.php';

include './include/header.php';
include './include/nav.php';
require './include/validate.php';


//Al trabajar sin base de datos, usamos los mismos objetos que el inicio de sesion.
$accounts = [new Account('ES3045678912', 'Debito', 1267.5),
    new Account('ES0937568235', 'Inversion', 3487.67)];
$costumer1 = new Customer('User', 'userfirst', 'userlast', 'juan@email.com', "1111", $accounts);

$user = [
    'email'  => '',                                           // Inicializamos un array $user para recoger variables
    'asunto'   => '',
    'consulta' => '',
];

$errors = [                                                    // Inicializamos un array $errores para recoger errores
    'email'  => '',
    'asunto'   => '',
    'consulta' => '',
];
$message = ''; // Initialize message
if ($_SERVER['REQUEST_METHOD'] == 'POST') {                   // Cuando se pulsa en enviar formulario
    $user['email']  = $_POST['email'];                        // Obtenemos mail
    $user['asunto']   = $_POST['asunto'];                     // Obtenemos asunto
    $user['consulta'] = $_POST['consulta'];                   // Obtenemos consulta

    $errors['email']  = validate_mail($user['email'])? '': 'Introduzca email valido';  //Validamos y si no mensaje de errores
    $errors['asunto']   = validate_asunto($user['asunto']) ? '': 'Introduzca un asunto';
    $errors['consulta'] = validate_consulta($user['consulta']) ? '': 'Introduzca consulta';

    $invalid = implode($errors);                                  // Unimos los mensajes de error
    if ($invalid) {                                               // Si hay errores
        $message = 'Por favor rellene correctamente';  // No enviamos
    } else {                                                     // Si no
        $message = 'Los campos son correctos';                   // Datos validados
    }
}
?>

<form class="form-email" method="post" action="formemail.php" name="email-form">
    <div class="form-element">
        <label>Email</label>
        <input type="text" name="email" />
        <span class="error"><?= $errors['email'] ?></span><br>

    </div>
    <div class="form-element">
        <label>Asunto</label>
        <input type="text" name="asunto"  />
        <span class="error"><?= $errors['asunto'] ?></span><br>
    </div>
    <div class="form-element">
        <label>Consulta</label>
        <div>
            <textarea  name="consulta" rows="5" cols="33">
            </textarea>
            <span class="error"><?= $errors['consulta'] ?></span><br>

        </div>

    </div>
    <button type="submit" name="eviar" value="enviar">ENVIAR</button>
</form>
<div class="validate_form_message">
    <div>
        <p><?= $message ?></p><!-- Mensaje de validez de los campos -->
    </div>
</div>

<?php
include "./include/footer.php";
?>


