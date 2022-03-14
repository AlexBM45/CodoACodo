<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h2>Registro</h2>
    <form action="recibir.php" method="GET">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">
        <label for="edad">Edad</label>
        <input type="text" name="edad">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="">
        <label for="radio">Estudios</label>
        <input type="radio" name="estudios" value="Primaria" id="">Primaria
        <input type="radio" name="estudios" value="Secundaria" id="">Secundaria
        <input type="radio" name="estudios" value="Terciario" id="">Terciario
        <label for="cont">Continentes</label>
        <select name="cont" id="">
            <option value="America">America</option>
            <option value="Asia">Asia</option>
            <option value="Europa">Europa</option>
            <option value="Africa">Africa</option>
        </select>
        <label for="pelis">Películas</label>
        <input type="checkbox" name="pelis[]" id="" value="Spiderman">Spiderman
        <input type="checkbox" name="pelis[]" id="" value="Dr. Strange">Dr. Strange
        <input type="checkbox" name="pelis[]" id="" value="Jumanji">Jumanji
        <input type="checkbox" name="pelis[]" id="" value="Avengers">Avengers
        <input type="checkbox" name="pelis[]" id="" value="Batman">Batman
        <input type="checkbox" name="pelis[]" id="" value="Star Wars">Star Wars

        <input type="submit" value="Enviar">
    </form>
</body>
</html>