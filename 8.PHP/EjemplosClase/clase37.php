<?php
    $bbdd = 'alumnos2021';
    include 'conexion.php';

    // if(true){
    //     *Envia a la dirección señalada
    //     header("location: registro.html");
    // }

    // *Verificar que la variable está vacía
    if(isset($bbdd) && empty($bbdd)){
        echo 'Esta vacía';
        // *Filtrar datos
        is_string($bbdd);
        is_numeric($bbdd);
    }else{
        echo 'Llena';
    }

    /* Se puede filtar:
        HTML con required
        JavaScript
        PHP
    Lo ideal es darle el trabajo a FRONT */
    
    
?>