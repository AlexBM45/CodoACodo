<?php
    $peliculas = ['Matrix','Dune','Incendio en el fondo del mar','Django'];
    $productos = [
        [
          'ID' => '001',
          'nombre' => 'TV Smart',
          'precio' => 25000,
          'tipo' =>[
            'a' => 'electro',
            'b' => 'home'
          ]
        ],
        [
          'ID' => '002',
          'nombre' => 'Monitor',
          'precio' => 2000,
          'tipo' =>[
            'a' => 'electro',
            'b' => 'work'
          ]
        ],
    ];

    echo '<pre>';
    var_dump($productos);
    echo '</pre>';
    echo $productos['0']['nombre'];
    echo $productos['1']['nombre'];

    if(true){
      echo 'Hola, esto es verdad';
      if(true){
        echo 'If anidado';
      }
    } else {
      echo 'No se cumplió';
    };

    $edad = 21;
    $nomAlumno = 'Roxana';

    if($edad > 18 && $nomAlumno == 'Roxana'){
      echo 'Ambos son verdad';
    }

    //! Puede usarse OR ||

    // *Anidar if
    if($edad < 18){
      echo 'Menor a 18';
    } else if ($edad == 18){
      echo 'Tiene 18';
    } else {
      echo 'Mayor a 18';
    };

    $duerme = 3;
    // *SWITCH
    switch($duerme){
      case 1:
        echo 'Si duerme';
        break;
      case 2:
        echo 'No duerme';
        break;
      default:
        echo 'Opción inválida';
        break;
    };

    $valor = 11;

    while($valor < 10){
      echo 'Probando el WHILE'.$valor;
      $valor++;
    };

    do{
      echo 'Probando DO-WHILE';
    } while($valor < 10);
    // DO-WHILE ejecuta la condición por lo menos una vez

    for($i = 0; $i < count($peliculas); $i++){
      echo $peliculas[$i];
    };

    foreach($peliculas as $pelicula){
      echo $pelicula;
    };

    $deportes = ['futbol', 'baseball', 'natación', 'atletismo', 'arquería', 'karate'];

    foreach($deportes as $deporte){
      echo $deporte;
    };
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>