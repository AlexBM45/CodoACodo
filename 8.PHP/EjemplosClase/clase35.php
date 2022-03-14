<?php
    /* Existen tres formas de conectarse con las bases de datos:
            1. Por procedimientos (funciones Mysqli)
            2. Mediante objetos
            3. Mediante POO
    */

    // *Variable para guardar la conexión con la BBDD
    // se le debe indicar en donde está alojada la BBDD
    // el usuario de la base de datos
    // el nombre de la base de datos
    // contraseña de la BBDD
    $conexion = mysqli_connect ('localhost','root','','alumnos2021');

    // *para saber si hubo algún error
    if(mysqli_connect_errno()){
        echo 'falló: ' . mysqli_connect_errno(); // muestra el error
    } else {
        echo 'se conecto perfecto';
    }

    // *Consultas
    // llamar a la conexion a BBDD
    // sentencia SQL
    $consultas = mysqli_query($conexion,'SELECT * FROM registro');

    // !Se le debe indicar que convierta lo que trajo a arrays o arrays asociativos
    //$listado = mysqli_fetch_assoc($consultas);

    //echo '<pre>';
   // var_dump($listado);
   // echo '</pre>';

    //echo $listado['nombre'];

    // *OTRO MÉTODO
    //$listaArray = mysqli_fetch_array($consultas);

    //echo $listaArray[1];

    while( $listaArray = mysqli_fetch_array($consultas)){
        echo $listaArray['id'];
    }

    // cerrar la conexión
    mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traer datos</title>
</head>
<body>
    <table>
        <tr>
            <td>Nombre</td>
        </tr>
    </table>
</body>
</html>