<?php

    // Comentario de una linea
    /* Comentario
    multilinea */
    echo "Hola Mundo!";

    print("Hola Mundo!");

    var_dump("Hola Mundo!");

    var_dump(10);

    // *Variables
    $nombre = "Karina";
    $edad = 15;
    $altura = 15.5;
    $booleano = true;

    // imprimir la variable
    echo $nombre;

    // *Constante
    define("PI",3.14159);

    // imprimir la constante
    echo PI;

    // *Operaciones
    $num1 = 10;
    $num2 = 20;
    echo $num1 + $num2;
    echo $num2 - $num1;
    echo $num1 / $num2;
    echo $num2 * $num1;

    // *Concatenar
    echo "Hola estoy concatenando".$num1;

    // *Operadores de comparación
    echo $num1 > $num1;
    echo $num1 === $num2;

    // *Array
    $carrito = ['tablet','monitor','tv'];
    echo "<pre>";
    var_dump($carrito);
    echo "</pre>";
    echo $carrito[1];

    // Otra forma de crear array
    $clientes = array('Juan','María','Nicolas');

    // *Array asociativo
    $cliente = [
        'ID' => '001',
        'nombre' => 'Romina',
        'apellido' => 'Arreola',
        'curso' => 'PHP',
        'informacion' => [
            'tipo' => 'empleado'
        ]
    ];
    echo $cliente['ID'];
    echo $cliente['informacion']['tipo'];

    $productos = [
        'ID' => '001',
        'nombre' => 'monitor',
        'marca' => 'LG',
        'cantidad' => 10
    ];

    var_dump($productos['ID']);
?>