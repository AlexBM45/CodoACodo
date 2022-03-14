<?php

    // *Preguntar por la existencia de una variable
    // $resultado = isset($edad);
    // echo $resultado;

    
    if(($_GET['nombre']) && ($_GET['password'])){

        $nombre = $_GET['nombre'];
        $pass = $_GET['password'];
        echo 'Nombre: ' . $nombre;

        if($nombre == 'Juan' && $pass == 'password1'){
            echo 'Usuario correcto';
        }

        echo 'Aqui se reciben los datos';
        echo '<pre>';
        var_dump($_GET);
        echo '</pre>';

        // *Un sólo dato
        echo 'Hola el usuario es ' . $_GET['nombre'];
        echo 'Continente: ' . $_GET['cont'];

        // *Recorrer con forEach
        foreach($_GET['pelis'] as $pelicula){
            echo $pelicula;
        }
    } else {
        echo 'No existen los datos';
    }
?>