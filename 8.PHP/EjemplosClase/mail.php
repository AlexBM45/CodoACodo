<?php
    // *Envíar correo
    // destinatario
    // asunto
    // cuerpo del mensaje
    // opcional, se puede escribir un correo del cual llegó
    // si este parámetro no se llena, llega con datos del servidor
    $destino = 'alejandrabenitezmtz@gmail.com';
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    mail($destino,$asunto,$mensaje);
?>