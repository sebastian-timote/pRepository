<?php

class Pagina{
    public $nombre = "codigo facilito";
    public static $url = "www.codigofacilito.com";

    public function bienvenida(){
        echo "Bienvenidos a <b>" . $this->nombre . "</b> la pagina es <b>" . Pagina::$url . "</b><br>";//Pagina::$url accede a atributos statics ya que no se puede acceder por objeto o -> 
        
    }
    public static function bienvenido2(){//un metodo estatico no puede acceder a tributos de la clase, solo ha atrbutos static 
        echo " bienvenidos de nuevo " . Pagina::$url;
          
    }
}
// $pagina = new Pagina();
// $pagina->bienvenido2();//un metodo static tambien se puede acceder por objeto
//echo $pagina->url;//no se puede acceder ya que es un atributo static
//echo $pagina->nombre;//si se puede acceder ya que es un atributo public
//Pagina::bienvenido2();//esta es otra manera de acceder a metodos staticos

class Web extends Pagina{//los metodos static se pueden acceder tambien de clases que heredan otra

}
Web::bienvenido2();

?>