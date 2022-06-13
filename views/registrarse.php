<div class="errormsg">
<?php
  $username_err = isset($_GET["user_err"]) ? "Este usuario ya existe, prueba con uno nuevo." : "";
  $email_err = isset($_GET["email_err"]) ? "Este correo está en uso, prueba con uno nuevo." : "";
?>
</div>
<div class="fondo ">
    <form action="/salon/views/coderegister.php" method="post" class="form">
        <div class="form-group">
            <label for="#">Usuario: </label>
            <input type="text" name="username" required>
             <span class="msg-error"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" required>
          <span class="msg-error"> <?php echo $email_err; ?></span>
        </div>
        <div class="form-group">
            <label for="#">Password: </label>
            <input type="password" name="password" required minlength="4">
            <p align="center">
            ¿Ya tienes una cuenta? 
            <a href="index.php?view=login">¡Inicia sesión!</a>
        </p>
        </div>
        
        <button type="submit" class="btn btn-submit">Ingresar</button>
    </form>
</div>