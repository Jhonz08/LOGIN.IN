<?php

$email  = $_POST['email'];


if (empty($email)) {

    echo 'error_1'; // Un campo esta vacio y es obligatorio

} else {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        # Incluimos la clase usuario
        require_once('../model/usuario.php');

        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario->recuperarContrasena($email);
    } else {
        echo 'error_4';
    }
}
