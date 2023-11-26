<?php
include 'Conex.php';

$id=$_POST["Id"];
$nombre=$_POST["Nombre"];
$precio=$_POST["precio"];


$guardar= "INSERT INTO Cliente VALUES('$Id','$Nombre','$precio')";
if(mysqli_query($conexion,$Guardar))

{echo "Datos insertados con exito";}
else
{echo "error al insertar los datos".mysqli_error($conexion);}
mysqli_close($conexion);

?>

