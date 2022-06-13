<?php
session_start();
session_destroy();
header("Location: /salon/index.php?view=login");
?>