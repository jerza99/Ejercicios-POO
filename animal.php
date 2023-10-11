    <!DOCTYPE html>
        <body>
            <a href="index.php">Inicio</a> <br> <br> <br>
        </body>
    </html>
    <?php 
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

    echo $leon->grita() . '<br>';
    echo $venado->correr();
