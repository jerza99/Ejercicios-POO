<?php
    class Profesor {
        public $nombre;
        private $calificacion;

        public function __construct($nombre , $calificacion){
            $this->nombre = $nombre;
            $this->calificacion = $calificacion;
        }
        public function getNombre(){
            return $this->nombre;
        }

        public function getCalificacion() {
            return $this->calificacion;
        }
    }

    class Alumno {
        private $nombre;

        public function __construct($nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
    }

    class Materia {
        private $nombre;

        public function __construct($nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        } 
    }   

    $profesor = new Profesor('Alejandro' , 90);
    // echo $profesor->nombre;
    $nombreProfesor = $profesor->getNombre();
    $calificacion = $profesor->getCalificacion();
    $alumno = new Alumno('Juan Perez');
    $nombreAlumno = $alumno->getNombre();
    $materia = new Materia('Matematicas');
    $nombreMateria = $materia->getNombre();

    // echo 'El profesor '.$nombreProfesor.' le asignó una calificación de '.$calificacion.' al alumno '.$nombreAlumno.' en la materia '.$nombreMateria .'<br>';

    class Animal {
        protected $name;
        protected $edad;

        public function __construct($name){
            $this->name = $name;
        }

        public function getNombre() {
            return $this->name;
        }  
    }

    class Leon extends Animal {
        public function grita() {
            return 'El leon ' . $this->getNombre() . ' esta rugiendo.';
        }
        public function getNombre() {
            return 'Se llama Alex y';
        }
    }

    class Venado extends Animal {
        public function correr() {
            return 'El ' . $this->getNombre() . ' esta corriendo.';
        }
    }

    $leon = new Leon('Leon');
    $venado = new Venado('Venado');

    // echo $leon->grita() . '<br>';
    // echo $venado->correr();
    
    class Auto {
        protected $nombre;
        protected $año;
        public $modelo;

        public function __construct($nombre , $año , $modelo){
            $this->nombre = $nombre;
            $this->año = $año;
            $this->modelo = $modelo;
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function getAño(){
            return $this->año;
        }
        public function getModelo(){
            return $this->modelo;
        }
    }

    class BMW extends Auto {

        public function getModelo(){
            // Actualiza
            return 'BMW ' . parent::getModelo();
        }
        public function getCategoria(){
            return 'Deportivo';
        }
    }
    class Audi extends Auto {
        public function getCategoria(){
            return 'Premiun';
        }
    }
    class Lexus extends Auto {
        public function getCategoria(){
            return 'Deportivo';
        }
    }

    $bmw = new BMW('BMW', 2017, 'X5');
    echo 'El coche '. $bmw->getNombre() . ' su modelo es: ' . $bmw->getModelo() 
    . ' y pertenece al año: ' . $bmw->getAño() . ' en la categoria: ' . $bmw->getCategoria() . '<br>';
    $bmw->modelo = 'Serie 5';
    echo 'Nuevo modelo del BMW es: ' . $bmw->getModelo() . '<br>';

    ?>