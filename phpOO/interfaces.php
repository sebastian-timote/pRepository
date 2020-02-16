<?php
    interface Auto{

        public function encender();
        public function apagar();

    }
    interface Gasolina extends Auto{

        public function vaciarTanques();
        public function llenarTanques($cant);

    }
    class Deportivo implements Gasolina{

        private $estado = false;
        private $tanque = 0;

        public function estado(){

            if ($this->estado) {
                print "el auto esta encendido  y tiene $this->tanque de litros en el tanque <br>";
            }else {
                print "el auto esta apagado <br>";
            }
        }

        public function vaciarTanques(){

            $this->tanque=0;

        }
        public function llenarTanques($cant){

            $this->tanque = $cant;

            
        }
        public function encender(){

            if ($this->estado) {
                print "No puedes encender el carro 2 veces <br>";
            }else {
                print "Auto encendido <br>";
                $this->estado= true;
            }
            
        }
        public function apagar(){
            
            if ($this->estado) {
                print "auto apagado <br>";
                $this->estado= false;
            }else {
                print "Auto ya esta pagado <br>";
            }

        }
        public function usar($km){

            if ($this->estado) {
                $reducir=$km/3;
                $this->tanque = $this->tanque - $reducir;
                if ($this->tanque <= 0) {
                    $this->estado= false;
                }
            }else {
                print "el auto esta apagado y no se puede usar <br>"; 
            }

        }
    }

    $obj= new Deportivo();
    $obj->llenarTanques(50);
    $obj->encender();
    $obj->usar(150);
    $obj->estado();
?>