<?php
include("conexion.php");

$id = $_GET['id'];
$solicitud = "DELETE FROM datos WHERE ID=$id";
$resultado = mysqli_query($conexion, $solicitud);
header("location: verT.php");
?>