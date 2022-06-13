<?php 
    require "conexion.php";

    $id=$_GET['id'];

    $sql="SELECT * FROM citas WHERE id_cita='$id'";
    $query=mysqli_query($link,$sql);

    $cita=mysqli_fetch_array($query);
?>
<?php 

// session_start();
// if (!isset($_SESSION["loggedin"]) || !isset($_SESSION["id"])) {
//   header("Location: /salon/index.php?view=login");
//   exit;
// }

?>
<main class="main container translate-main">
<div class="fondo ">
  <form action="/salon/views/update.php" method="post" class="form">
      <div class="form-group">
      <div class="errormsg">
        <?php if (isset($_GET["err"])) echo "Esta fecha y hora ya está en uso, por favor, selecciona una diferente."?>
        <input type="hidden" name="id_cita" value="<?php echo $cita['id_cita']  ?>">
        </div>
      </div>
      <div class="form-group">
          <label for="#">Nombre completo: </label>
          <input type="text" placeholder="Nombre y apellido" name="nombre_citador" value="<?php echo $cita['nombre_citador']  ?>" required>
      </div>
      <div class="form-group">
          <label for="#">Numero de teléfono: </label>
          <input type="text" placeholder="Teléfono" name="telefono" value="<?php echo $cita['telefono']  ?>" required>
      </div>
      <div class="form-group">
        <label for="#">Tipo de servicio: </label>
        <select class="servicios" name="servicio" required>
          <option value="Cortes" <?php if($cita['servicio']=="Cortes"){echo " selected ";}?> >Cortes</option>
          <option value="Uñas" <?php if($cita['servicio']=="Uñas"){echo " selected ";}?> >Uñas</option>
          <option value="Manicure" <?php if($cita['servicio']=="Manicure"){echo " selected ";}?> >Manicure</option>
          <option value="Pedicure" <?php if($cita['servicio']=="Pedicure"){echo " selected ";}?> >Pedicure</option>
          <option value="Tintes" <?php if($cita['servicio']=="Tintes"){echo " selected ";}?> >Tintes</option>
          <option value="Balayage" <?php if($cita['servicio']=="Balayage"){echo " selected ";}?> >Balayage</option>
          <option value="Cortes para niños" <?php if($cita['servicio']=="Cortes para niños"){echo " selected ";}?> >Cortes para niños</option>
          <option value="Mechas" <?php if($cita['servicio']=="Mechas"){echo " selected ";}?> >Mechas</option>
          <option value="Alisados" <?php if($cita['servicio']=="Alisados"){echo " selected ";}?> >Alisados</option>
          <option value="Rayos" <?php if($cita['servicio']=="Rayos"){echo " selected ";}?> >Rayos</option>
          <option value="Depilacion" <?php if($cita['servicio']=="Depilacion"){echo " selected ";}?> >Depilación de cejas</option>
          <option value="Keratina" <?php if($cita['servicio']=="Keratina"){echo " selected ";}?> >Keratina</option>
         </select>
      </div>
      <div class="form-group">
          <label for="#">Fecha de la cita: </label>
            <?php 
              date_default_timezone_set("America/El_Salvador");
              $fecha = date("Y-m-d");
              $fecha2=time()+1209600;
              $fecha3=date("Y-m-d",$fecha2);
            ?>
          <input type="date" name="fecha" min="<?php echo $fecha?>"  max="<?php echo $fecha3?>" required value="<?php echo $cita['fecha']  ?>" class="fecha" required>
      </div>
      <div class="form-group">
        <label for="#">hora de la cita: </label>
        <select class="servicios" name="hora" required>
          <option value="6:00 PM" <?php if($cita['hora']=="6:00 PM"){echo " selected ";}?> >6:00 PM</option>
          <option value="6:30 PM" <?php if($cita['hora']=="6:30 PM"){echo " selected ";}?> >6:30 PM</option>
          <option value="7:00 PM" <?php if($cita['hora']=="7:00 PM"){echo " selected ";}?> >7:00 PM</option>
          <option value="7:30 PM" <?php if($cita['hora']=="7:30 PM"){echo " selected ";}?> >7:30 PM</option>
          <option value="8:00 PM" <?php if($cita['hora']=="8:00 PM"){echo " selected ";}?> >8:00 PM</option>
          <option value="8:30 PM" <?php if($cita['hora']=="8:30 PM"){echo " selected ";}?> >8:30 PM</option>
          <option value="9:00 PM" <?php if($cita['hora']=="9:00 PM"){echo " selected ";}?> >9:00 PM</option>
         </select>
      </div>
      
      <button type="submit" class="btn btn-submit">Enviar</button>
  </form>

</div>
</main>
