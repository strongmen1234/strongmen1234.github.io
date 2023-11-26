<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
body {
	background-color: #09F;
}
</style>
</head>

<body>
<?php 


$servername = "localhost";
$username = "root";
$password = "";
$database = "Proyecto";

$conexion =mysqli_connect($servername, $username, $password, $database) or die ("Conexion Fallida");
$Id=$_POST["Id"];

$Consulta= "SELECT * FROM Cliente WHERE Id='$Id'";

$resultado=$conexion -> query($Consulta);
if ($renglon = $resultado->fetch_assoc()) {
	$Id= $renglon["Id"];
	?>
    <form action="Datos.php" method="POST">
    <?php
    $Nombre= $renglon["Nombre"];
	
	$Direccion= $renglon["Direccion"];
	$Sexo= $renglon["Sexo"];
	$Tiposangre= $renglon["Tiposangre"];
	$Telefono= $renglon["Telefono"];
	$Correo= $renglon["Correo"];
	$Peso= $renglon["Peso"];
	$Estatura= $renglon["Estatura"];
	echo"<p>Id: <input type='text' name='Id' value='$Id' /></p>";

	echo"<p>Nombre: <input type='text' name='Nombre' value=' $Nombre' /></p> ";
	echo"<p>Direccion: <input type='text' name='Direccion' value='$Direccion'/></p>";
	echo"Sexo: <select name='Sexo' value='$Sexo' id='Sexo'>
            <option value='Masculino'>Masculino</option>
            <option value='Femenino'>Femenino</option>
          </select>";
	
	
	
	echo"<p>Tiposangre:  <select name='Tiposangre' value='$Tiposangre' id='Tiposangre'>
            <option value='a+'>a+</option>
            <option value='a-'>a-</option>
			 <option value='b+'>b+</option>
			  <option value='b-'>b-</option>
			   <option value='ab+'>ab+</option>
			    <option value='ab-'>ab-</option>
				 <option value='o+'>o+</option>
				  <option value='o-'>o-</option>
          </select>";
	echo"<p>Telefono: <input type='text' name='Telefono' value='$Telefono'/></p>";
	echo"<p>Correo: <input type='text' name='Correo' value='$Correo'/></p>";
	echo"<p>Peso: <input type='text' name='Peso' value='$Peso'/></p>";
	echo"<p>Estatura: <input type='text' name='Estatura' value='$Estatura'/></p>";
    }

?>
  <p>
           <input type="submit" name="Submit" value="Enviar" />
    </p>
</form>

<?php 

mysqli_close($conexion);
?>

</body>
</html>

            