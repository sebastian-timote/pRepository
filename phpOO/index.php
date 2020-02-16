<?php
    // class Persona{
    //     //atributos
    //     public $nombres="pedro";
    //     //metodo
    //     public function hablar($mensaje){
    //         echo  $mensaje;
    //     }
    //     public function hablar1($mensaje){
    //         return $mensaje;
    //     }
    // }
    // $persona = new Persona();//instancio la clase persona
    // echo "$persona->nombres <br>";
    // $persona->hablar("este es el curso de codigo facilito<br>");
    // echo $persona->hablar1('este es otro mensaje<br>');
    // echo('holis');0

    //---CLASE TRES -----
    class Persona{
        //atributos
        public $nombres=array();
        public $apellido=array();
        //metodo
        public function guardar($nombres, $apellido){
            $this->nombres[]= $nombres;
            $this->apellido[]=$apellido;
        }
        public function mostrar(){

            for($i=0 ; $i < count($this->nombres) ; $i++){
                //$this->formato($this->nombres[$i], $this->apellido[$i]);//llama una funcion dentro de otra
                self::formato($this->nombres[$i], $this->apellido[$i]);//llama una funcion dentro de otra 
            }
        }
        public function formato($nombres, $apellido){
            echo "Nombre:" . $nombres . " | Apellido: " . $apellido . "<br>";
        }
    }
    $persona = new Persona();//instancio la clase persona
    $persona->guardar("pedro", "banon");
    $persona->guardar("alvaro", "garcia");
    $persona->mostrar();
    
    
?>



    
