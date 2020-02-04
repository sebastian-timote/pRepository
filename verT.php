<?php
include("conexion.php");
$solicitud = "SELECT * FROM datos ";
$resultado = mysqli_query($conexion, $solicitud);




echo "<table border = '1'> <tr><td>NOMBRE Y APELLIDO</td><td>EDAD</td><td>CELULAR</td></tr>";
while($fila = mysqli_fetch_array($resultado)){
    echo "<tr>";
    echo "<td>" . $fila['Nombre'] . " " . $fila['Apellido'] . "</td>";
    echo "<td>" . $fila['Edad'] . "</td>";
    echo "<td>" . $fila['Celular'] . "</td>";
    echo "</tr>";
}
echo("</table>");
?>