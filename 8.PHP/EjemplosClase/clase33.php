<?php
    class superHeroes{
        private $nombre; // no se puede acceder a ella
        private $poderes;
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

        // *GETTERS y SETTERS
        // get y set
        // *método GET para obtener el nombre ya que es privado
        public function getNombre(){
            return $this -> nombre;
        }

        public function getPoderes(){
            return $this -> poderes;
        }

        // *método SET para asignar un valor a una variable privada
        public function setNombre($nombre){
            $this -> nombre = $nombre;
        }

        public function volar(){
            echo 'Volar';
        }

        public function atacar(){
            echo 'estoy atacando';
        }
    }

    $personaje1 = new SuperHeroes('Batman','ser millonario','DC');
    echo '<pre>';
    var_dump($personaje1);
    echo '</pre>';

    // *Accionar el método
    $personaje1 -> atacar();

    // $personaje1 -> nombre = 'Bruce'; // !ERROR
    echo $personaje1 -> getNombre();

    echo $personaje1 -> getPoderes();

    // *Asignar un valor a nombre
    $personaje1 -> setNombre('Bruce Wayne');

    echo '<pre>';
    var_dump($personaje1);
    echo '</pre>';


    // *Clase Padre

    class Animal {
        public $nombre;
        public $raza;
        public $color;
        public $cantidadPulgas;

        public function __construct($nombre,$color){
            $this -> nombre = $nombre;
            $this -> color = $color;
        }

        public function comunicarse(){
            echo 'Hola soy ...';
        }
    }

    // *Clase hijo Perro
    class Perro extends Animal {
        // *Modificar el método para personalizarlo al objeto
        // Polimorfismo: cambiar las instrucciones del método
        public function comunicarse(){
            echo 'Guau, guau';
        }
    }

    // *Clase hija Gato
    class Gato extends Animal {
        // polimorfismo
        public function comunicarse(){
            echo 'miau, miau';
        }

        public function ronornear(){
            echo '*ronroneando*';
        }
    }

    $perro1 = new Perro('Piucky','blanco');
    echo '<pre>';
    var_dump($perro1);
    echo '</pre>';

    $perro1 -> comunicarse();
?>