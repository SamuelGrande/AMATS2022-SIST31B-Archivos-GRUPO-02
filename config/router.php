<?php

    if (!isset($_GET['view'])) {
        $_GET['view'] = "inicio";
    }

    function View($direction)
    {
        return "views/$direction.php";
    }
?>