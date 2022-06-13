<?php

  if (isset($_SESSION["loggedin"])) {
    header("Location: /salon/index.php?view=inicio");
  }

?>
<main class="main container translate-main">
<div class="fondo">
    <form action="/salon/views/codelogin.php" method="post" class="form">
          <div class="form-group">
           <label for="">Email</label>
                <input type="text" name="email">
                <!-- <span class="msg-error"> <?php echo $email_err; ?></span> -->
        </div>
        <div class="form-group">
            <label for="#">Contraseña: </label>
            <input type="password" name="password" >
             <!-- <span class="msg-error"> <?php echo $password_err; ?></span> -->
            <p align="center">
            ¿No posees una cuenta? 
            <a href="index.php?view=registrarse" >¡Regístrate!</a>
        </p>
        </div>
        
        <button type="submit" class="btn btn-submit">Ingresar</button>
    </form>

</div>
</main>