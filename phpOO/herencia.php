<?php
    class Vehiculo{

        public $motor= false;
        public $marca;
        public $color;

        protected function estado(){
            if($this->motor){
                echo "el motor esta encendido <br>";
            }else{
                echo "el motor ahora esta apagado <br>";
            }
        }
        public function encender(){
            if($this->motor){
                echo "el motor ya esta encendido <br>";
            }else{
                echo "encendiendo <br>";
                $this->motor=true;
            }   
        }
    }
    class Moto extends Vehiculo{
        public function estadoMoto(){
            $this->estado();//de una clase hija se puede acceder al metodo protected
        }
    }
    class CuatriMoto extends Moto{

    }
    //$moto = new Moto();//creando un objeto moto se puede acceder a los metodos del vehiculo por la herencia 
    $moto = new cuatriMoto();// esta clase tambien tiene los metodos heredados de la clase Moto y de vehiculo
    //$moto->estado();//de este modo se accede si el metodo fuera publico
    $moto->encender();//
?>