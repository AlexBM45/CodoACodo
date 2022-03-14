<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<form action="clase36.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">
        <label for="dni">DNI</label>
        <input type="text" name="dni">
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="">
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>