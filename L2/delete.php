<?php

include("conexion.php");
$con=conectar();

$nombreequipo=$_GET['id'];

$sql="DELETE FROM examenpractico2 WHERE nombreequipo='$nombreequipo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Equipo.php");
    }
?>
