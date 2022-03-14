<?php
// ! Programación orientada a objetos POO
// *Es una forma de trabajar en la Programación
// *Ideal para proyectos medianos y grandes
// *Permite reutilizar código

/* CONCEPTOS
    abstracción
    objeto
    encapsulamiento
        públicas
        privadas
        protegidas
    constructor


ej: Objeto perro:
    caracteristicas/atributos
        nombre
        raza
        color
        tamaño
        edad
    acciones/comportamientos
        llorar
        ladrar
        morder
        comer
        dormir
        caminar
*/

// *Para tener un objeto, necesitamos un molde que en la programación es una clase


    //* Crear una clase
    // molde
    class Perro{
        //* atributos públicos
        // estas propiedades las van a tener todos los objetos creados con la clase
        // son de encapsulamiento público para que se pueda tener acceso desde cualquier lugar
        public $nombre = 'Pepe';
        public $raza;
        public $color;
        public $cantidadPulgas;

        // *Constructor
        // se ejecuta al momento que se crea el objeto
        // da los valores de los atributos a los objetos
        // debe ser público
        public function __construct($nombre,$color){
            $this -> nombre = $nombre;
            $this -> color = $color;
        }

        public function ladrar(){
            echo 'guau, guau';
        }

        public function romperCosas(){
            echo 'Rompiendo el sillón';
        }
    }

    // *Crear o instanciar un objeto
    // desde el molde Perro
    $perro1 = new Perro('Piucky', 'negro y blanco');
    // el objeto perro tendrá los atributos definidos en Perro
    echo '<pre>';
    var_dump($perro1);
    echo '</pre>';


    // *Atributo particular en uno de los objetos
    // $perro1 -> nombre = 'Piucky';
    // echo $perro1 -> nombre;

    $perro1 -> raza = 'border collie';
    // $perro1 -> color = 'blanco y negro';
    echo $perro1 -> raza;
    echo $perro1 -> color;


    $perro2 = new Perro('Leon','marrón');
    // $perro2 -> nombre = 'Leon';
    $perro2 -> raza = 'ovejero callejero';
    //$perro2 -> color = 'marrón';
    echo '<pre>';
    var_dump($perro2);
    echo '</pre>';

    echo $perro2 -> cantidadPulgas;


    class superHeroes{
        public $nombre;
        public $poderes;
        public $traje;
        public $colorTraje;
        public $edad;
        public $sexo;
        public $universo;

        public function __construct($nombre,$poderes,$universo){
            $this -> nombre = $nombre;
            $this -> poderes = $poderes;
            $this -> universo = $universo;
        }

        public function volar(){
            echo 'Volar';
        }
    }

    $personaje1 = new SuperHeroes('Batman','ser millonario','DC');
    echo '<pre>';
    var_dump($personaje1);
    echo '</pre>';
?>