<?php
  session_start();
  unset($_SESSION['username']);

  header("Location:front_page.php");
 ?>
