<?php

include 'Conex.php';
$id=$_POST['id'];


$consulta = "SELECT * FROM Cliente WHERE (Id = '$Id')";

$resultado = $conexion -> query($consulta);

if($renglon=$resultado -> fetch_assoc())
{
  
    $nombre=$renglon["nombre"];
    $precio=$renglon["precio"];


    //Mostrar datos

echo "id:<input value='$id' readonly />";
  echo "nombre: <input value='$nombre' readonly />";
    echo "precio:<input value='$precio' readonly />";
else {
	echo "Error al encontrar los datos";}

mysqli_close($conexion);


?>