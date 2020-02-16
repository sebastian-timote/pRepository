<?php
    class Facebook{

        public $nombre;
        public $edad;
        private $pass;

        public function __construct($nombre, $edad, $pass){//esta funcion se ejecuta al comienzo de la INSTANCIA DE LA CLASE
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->pass=$pass;
        }

        public function verInformacion(){//esta funcion se ejecuta al comienzo de la INSTANCIA DE LA CLASE
            echo "Nombre $this->nombre <br>";
            echo "Edad $this->edad <br>";
            self::cambiarPass("54321");//solo se puede acceder al metodo private dentro de un metodo de la clase
            echo "password $this->pass <br>";  
        }

        private function cambiarPass($pass){//esta funcion se ejecuta al comienzo de la INSTANCIA DE LA CLASE
            $this->pass=$pass;
        }

    }
    $facebook= new Facebook("sebastian", 22, "1234");
    //echo $facebook->pass;
    //$facebook->cambiarPass("54321");//no sepuede acceder directamente del objeto el metodo privado cambiarpass
    $facebook->verInformacion();



?>