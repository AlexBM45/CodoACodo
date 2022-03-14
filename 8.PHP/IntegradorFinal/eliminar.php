<?php
    $bbdd = 'reto2';
    include 'conexion.php';

    $id = $_GET['id'];

    $eliminar = "DELETE FROM registro WHERE id = '$id'";
    $delete = mysqli_query($conexion,$eliminar);

    header("location:listado.php");

    mysqli_close($conexion);
?>