<?php
include 'conex.php';
 $Id=$_POST["Id"];
 
 
 $Eliminar= "DELETE FROM Cliente WHERE Id='$Id'";
   if(mysqli_query($conexion,$Eliminar))
   { echo "Datos Eliminados con exito";}
   else
   { echo "Error al guardar datos..." .mysqli_error($conexion);} 

   mysqli_close($conexion);
 ?>