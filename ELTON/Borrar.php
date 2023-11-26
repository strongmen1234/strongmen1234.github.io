<?php
include 'Conex.php';

$id=$_POST["id"];


$borrar= "DELETE FROM Cliente WHERE (Id='$Id')";
if(mysqli_query($conexion,$borrar))

{echo "Datos eliminados con exito";}
else
{echo "error al insertar los datos".mysqli_error($conexion);}
mysqli_close($conexion);

?>
