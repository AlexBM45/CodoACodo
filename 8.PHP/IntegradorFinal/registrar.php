<?php

    $bbdd = 'reto2';
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $pass = $_POST['contra'];

    $insertar = "INSERT INTO registro(id,nombre,apellido,dni,telefono,correo,password) VALUES (null,'$nombre','$apellido','$dni','$telefono','$correo','$pass')";

    $enviar = mysqli_query($conexion,$insertar);

    header("location:listado.php");

    // cerrar la conexión
    mysqli_close($conexion);
?>