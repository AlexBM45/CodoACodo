<?php
    $bbdd = 'alumnos2021';
    include 'conexion.php';

    $id = $_GET['id'];

    $eliminar = "DELETE FROM registro WHERE id = '$id'";
    $delete = mysqli_query($conexion,$eliminar);

    echo 'Eliminado';
?>