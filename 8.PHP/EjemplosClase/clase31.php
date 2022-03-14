<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
        $curso = 'PHP';
        $anio = 2021;

        // *Llamar a otro archivo
        include 'header.php';
    ?>
    <h1>Curso: <?php echo $curso?> Año: <?php echo $anio ?></h1>

    <?php
        // *FUNCIONES
        // se le puede asignar que tipo de datos va a recibir
        // también qué tipo de dato va a devolver
        // VOID indica que no devuelve algo
        function sumar(int $n1, int $n2): int{
            // variable local
            $total = $n1 + $n2;
            return $total;
        };

        // $totalSuma = sumar(20,15);
        echo sumar(20,15);
    ?>
    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
</body>
</html>