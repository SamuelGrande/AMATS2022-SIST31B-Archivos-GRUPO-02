<?php

  if (isset($_SESSION["loggedin"])) {
    header("Location: /salon/index.php?view=dashboard");
  } else {
    header("Location: /salon/index.php?view=login");
  }
?>
