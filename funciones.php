<?php
require_once('conex.php');
if(isset($_REQUEST['btn-agregar'])){
$nombre_imagen=$_FILES['foto']['name'];
$temporal=$_FILES['foto']['tmp_name'];
$carpeta='../img';
$ruta=$carpeta.'/'.$nombre_imagen;
move_uploaded_file($temporal,$carpeta.'/'. $nombre_imagen);
$conte=$_POST['conte'];
$catego=$_POST['catego'];
$query="INSERT INTO imagen (ruta, contenido, catego) VALUES('$ruta','$conte','$catego')";
$execute=mysqli_query($con,$query) or die(mysqli_error($con));
if($execute){
    header("Location: ../index.php");
}else{
    echo"hubo un erro";
}
}
?>