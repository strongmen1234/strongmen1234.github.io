<?php
include 'conex.php';
 $Id=$_POST["Id"];
 $Nombre=$_POST["Nombre"];
 $Direccion=$_POST["Direccion"];
 $Sexo=$_POST["Sexo"];
 $Tiposangre=$_POST["Tiposangre"];
 $Telefono=$_POST["Telefono"];
 $Correo=$_POST["Correo"];
 $Peso=$_POST["Peso"];
 $Estatura=$_POST["Estatura"];

 $Guardar="INSERT into Cliente VALUE('$Id', '$Nombre','$Direccion','$Sexo','$Tiposangre','$Telefono','$Correo','$Peso','$Estatura')";
   if(mysqli_query($conexion,$Guardar))
   { echo "Datos insertados con exito";}
   else
   { echo "Error al guardar datos..." .mysqli_error($conexion);} 

   mysqli_close($conexion);
 ?>