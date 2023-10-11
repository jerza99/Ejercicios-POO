   <!DOCTYPE html>
   <body>
        <a href="index.php">Inicio</a> <br> <br> <br>
   </body>
   </html>
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
    echo $profesor->nombre;
    $nombreProfesor = $profesor->getNombre();
    $calificacion = $profesor->getCalificacion();
    $alumno = new Alumno('Juan Perez');
    $nombreAlumno = $alumno->getNombre();
    $materia = new Materia('Matematicas');
    $nombreMateria = $materia->getNombre();

    echo 'El profesor '.$nombreProfesor.' le asignó una calificación de '.$calificacion.' al alumno '.$nombreAlumno.' en la materia '.$nombreMateria .'<br>';