<?php
include("conexion.php");
$solicitud = "CREATE TABLE datos (
    ID int NOT NULL AUTO_INCREMENT,
    Nombre varchar (15),
    Apellido varchar (15),
    Edad int,
    Celular int, PRIMARY KEY(ID))";
$resultado = mysqli_query($conexion, $solicitud);
?>