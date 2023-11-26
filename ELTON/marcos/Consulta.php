<style type="text/css">
body {
	background-color: #0CF;
}
</style>
<?php
include'conex.php';
$Id=$_POST["Id"];
$consulta ="SELECT * FROM Cliente WHERE (Id='$Id')";
$resultado = $conexion -> query($consulta);
if($renglon=$resultado-> fetch_assoc())
{
$Id=$renglon["Id"];
$Nombre=$renglon["Nombre"];
$Direccion=$renglon["Direccion"];
$Sexo=$renglon["Sexo"];
$Tiposangre=$renglon["Tiposangre"];
$Telefono=$renglon["Telefono"];
$Correo=$renglon["Correo"];
$Peso=$renglon["Peso"];
$Estatura=$renglon["Estatura"];



// Mostrar datos

echo "<p>Id:<input value= '$Id' /readonly></p>";
echo "Nombre:<input value= '$Nombre' /readonly>";
echo "Direccion:<input value= '$Direccion' /readonly>";
echo "Sexo:<input value= '$Sexo' /readonly>";
echo "<p>Tiposangre:<input value= '$Tiposangre' /readonly></p>";
echo "Telefono:<input value= '$Telefono' /readonly>";
echo "Correo:<input value= '$Correo' /readonly>";
echo "<p>Peso:<input value= '$Peso' /readonly></p>";
echo "<p>Estatura:<input value= '$Estatura' /readonly></p>";

}
mysqli_close($conexion);

?>