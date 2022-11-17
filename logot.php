<?php
  session_start();
  unset($_SESSION['admin_name']);

  header("Location:/IWP_PROJECT/front_page.php");
 ?>
