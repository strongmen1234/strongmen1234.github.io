<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "Proyecto";

$conexion =mysqli_connect($servername, $username, $password, $database) or die ("Conexion Fallida");
$Id=$_POST["Id"];
$Nombre=$_POST["Nombre"];
$Sexo=$_POST["Sexo"];
 $Tiposangre=$_POST["Tiposangre"];
 $Telefono=$_POST["Telefono"];
 $Correo=$_POST["Correo"];
 $Peso=$_POST["Peso"];
 $Estatura=$_POST["Estatura"];

 

$Direccion=$_POST["Direccion"];
$Modificar= "UPDATE Cliente SET Nombre='$Nombre',Direccion='$Direccion',Sexo='$Sexo',Tiposangre='$Tiposangre',Correo='$Correo' ,Telefono='$Telefono',Peso='$Peso',Estatura='$Estatura' WHERE Id='$Id'";
if(mysqli_query($conexion,$Modificar))
{ echo"Datos modificados con exito";}
else
{ echo"Error al modificar los datos" . msqli_error($conexion);}

mysqli_close($conexion);
?>

