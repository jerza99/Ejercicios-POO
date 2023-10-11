    <!DOCTYPE html>
    <body>
        <a href="index.php">Inicio</a> <br> <br> <br>
    </body>
    </html>
    <?php 
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
