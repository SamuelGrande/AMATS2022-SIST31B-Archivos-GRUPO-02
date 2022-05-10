<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM examenpractico2 WHERE nombreequipo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="nombreequipo" value="<?php echo $row['nombreequipo']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="logo" placeholder="Logo" value="<?php echo $row['logo']  ?>">
                                <input type="text" class="form-control mb-3" name="nombrejugador" placeholder="Nombre jugador" value="<?php echo $row['nombrejugador']  ?>">
                                <input type="text" class="form-control mb-3" name="fotojugador" placeholder="Foto jugador" value="<?php echo $row['fotojugador']  ?>">
                                <input type="text" class="form-control mb-3" name="posicionor" placeholder="Posicion" value="<?php echo $row['posicion']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="estatura" placeholder="Estatura" value="<?php echo $row['estatura']  ?>">
                                <input type="text" class="form-control mb-3" name="peso" placeholder="Peso" value="<?php echo $row['peso']  ?>">
                                <input type="text" class="form-control mb-3" name="uni" placeholder="Universidad" value="<?php echo $row['uni']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>