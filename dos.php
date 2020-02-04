<?php
session_start();
echo $_SESSION['nombre'] = "alex voney";
echo $_SESSION['edad'] = 30;

define ("PI", 3.1416);
echo PI;
$ojo = "hola";
$test1 = "sebas";
$a = 456;
$c = 4.5;
$cond1 = 4;
$cond2 = 3;
//echo $cond1 <=> $cond2;// da valor booleano
echo $f ?? $e ?? "no existe";
$b = (int)$a;// convierte float a int
var_dump($b);
var_dump($c);
echo "$a <br>";//immprime
echo "$ojo <br>";
echo gettype("$a <br>");
echo var_dump("$test1 <br>");
echo "--hola este es un texto con variables $a --<br> ";// comilla doble admite valores de variables
echo '--hola este es un texto sin variables $a --';//comilla simple admmite tetxto puro
echo $ojo . " " . $test1."<br>";// concatena con punto
print( '<a href = "http://google.com">'.$test1. '</a>'.$ojo);//imprime
printf( '<a href = "http://google.com">'.$test1. '</a>'.$ojo);///impriime
//echo `dir`;// esta variable es de sistema y la buscamos con esas comillas
$exi = "";
if ( isset($exi) && empty($exi) ){echo "ok";};
//isset($var) si existe o esta definida 
//empty($var) si esta vacio
//is_integer($var) si es un entero
$semana = array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
echo $semana[0];
foreach ($semana as $indice => $key) {
    echo $indice." ". $key."<br>";

}
$color[] = "amarillo";
$color[] = "azul";
$color[] = "rojo";
echo $color[2]."<br>";//imprime rojo

//array multidimensional
$arrMulti = [
    [10,20,30,40,50],
    [100,200,300,400,500],
    ["gato","perro","loro"]
];
echo $arrMulti[2][1];//imprime perro


?>