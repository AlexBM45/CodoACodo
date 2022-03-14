<?php
    $bbdd = 'reto2';
    include 'conexion.php';

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $pass = $_POST['contra'];

    // *ACTUALIZAR
    $actualizar = "UPDATE registro SET nombre='$nombre', apellido='$apellido', dni='$dni', telefono='$telefono', correo='$correo', password='$pass' WHERE id=$id";
    $actualizarBBDD = mysqli_query($conexion,$actualizar);

    header("location:listado.php");

    mysqli_close($conexion);
?>