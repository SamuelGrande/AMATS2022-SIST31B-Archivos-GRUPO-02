<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victoria's Salon</title>
    <!-- Estilos  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header class="header">
        <a href="index.php?view=inicio" class="navbar-brand">
            <img src="src/img/Mesa de trabajo 1.png" alt="LOGO">
        </a>
        <span class="btn-menu" id="btn-menu">
            MENU
        </span>
        <nav class="header-menu opacity">
            <ul class="menu menu_hide">
                <li class="menu-items">
                    <a href="index.php?view=inicio">Inicio</a>
                </li>
                <li class="menu-items">
                    <a href="index.php?view=citas">Citas</a>
                </li>
                <li class="menu-items">
                    <a href="index.php?view=servicios">Servicios</a>
                </li>
                <li class="menu-items">
                    <a href="index.php?view=contacto">Contacto</a>
                </li>
                <li class="menu-items">
                    <a href="index.php?view=login">Login</a>
                </li>
                
            </ul>
        </nav>
    </header>
    <div id="textToAdd"></div>

    <?php   
      require "config/router.php";
      include View($_GET['view']);
    ?>
        <!-- Js files -->
        <script src="js/typed.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>