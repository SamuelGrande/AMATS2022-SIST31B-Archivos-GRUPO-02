<?php 

  if (!isset($_SESSION["loggedin"]) || !isset($_SESSION["id"])) {
    header("Location: /salon/index.php?view=login");
    exit;
  }

?>
<main class="main container translate-main">
<div class="fondo ">
    <form action="/salon/views/registrar_cita.php" method="post" class="form">
        <div class="form-group">
        <div class="errormsg">
          <?php if (isset($_GET["err"])) echo "Esta fecha y hora ya está en uso, por favor, selecciona una diferente."?>
          <input type="hidden" name="id_usuario" value="<?php echo $_SESSION["id"] ?>">
          </div>
        </div>
        <div class="form-group">
            <label for="#">Nombre completo: </label>
            <input type="text" placeholder="Nombre y apellido" name="nombre_citador" required>
        </div>
        <div class="form-group">
            <label for="#">Numero de teléfono: </label>
            <input type="text" placeholder="Teléfono" name="telefono" required>
        </div>
        <div class="form-group">
          <label for="#">Tipo de servicio: </label>
          <select class="servicios" name="servicio" required>
            <option value="Cortes">Cortes</option>
            <option value="Uñas">Uñas</option>
            <option value="Manicure">Manicure</option>
            <option value="Pedicure">Pedicure</option>
            <option value="Tintes">Tintes</option>
            <option value="Balayage">Balayage</option>
            <option value="Cortes para niños">Cortes para niños</option>
            <option value="Mechas">Mechas</option>
            <option value="Alisados">Alisados</option>
            <option value="Rayos">Rayos</option>
            <option value="Depilacion">Depilación de cejas</option>
            <option value="Keratina">Keratina</option>
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
            <input type="date" name="fecha" min="<?php echo $fecha?>" max="<?php echo $fecha3?>" required class="fecha" required>
        </div>
        <div class="form-group">
          <label for="#">hora de la cita: </label>
          <select class="servicios" name="hora" required>
            <option value="6:00 PM">6:00 PM</option>
            <option value="6:30 PM">6:30 PM</option>
            <option value="7:00 PM">7:00 PM</option>
            <option value="7:30 PM">7:30 PM</option>
            <option value="8:00 PM">8:00 PM</option>
            <option value="8:30 PM">8:30 PM</option>
            <option value="9:00 PM">9:00 PM</option>
           </select>
        </div>
        
        <button type="submit" class="btn btn-submit">Enviar</button>
    </form>

</div>
</main>
