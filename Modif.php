<?php

include 'Conex.php';
$id=$_POST['id'];
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];


$modi = "UPDATE Cliente SET (nombre = '$nombre', precio = '$precio') WHERE (Id = '$Id')";


if(mysqli_query($conexion,$modi))

{echo "Datos insertados con exito";}
else
{echo "error al insertar los datos".mysqli_error($conexion);}
mysqli_close($conexion);

?>