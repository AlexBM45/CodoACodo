<?php

    $bbdd = 'alumnos2021';
    include 'conexion.php';

    /* Modelo-vista-controlador
        BBDD  visual  accesos
    */

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['email'];
    $pass = $_POST['password'];

    $insertar = "INSERT INTO registro(id,nombre,apellido,dni,telefono,correo,password) VALUES (null,'$nombre','$apellido','$dni','$telefono','$correo','$pass')";

    $insertar = mysqli_query($conexion,$insertar);

    // *Para mostrar si se agrego el registro
    if(!$insertar){
        echo 'No se insertó';
    } else{
        echo 'Registro insertado';
    }

?>