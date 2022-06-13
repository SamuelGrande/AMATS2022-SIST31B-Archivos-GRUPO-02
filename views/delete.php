<?php
    include("conexion.php");

    $id=$_GET['id'];

    $sql="DELETE FROM citas  WHERE id_cita='$id'";
    $query=mysqli_query($link,$sql);

    if($query){
        header("Location: /salon/index.php?view=dashboard_admin");
    }else {
    }
?>
