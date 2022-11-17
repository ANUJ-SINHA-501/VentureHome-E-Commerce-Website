<?php
  session_start();



  unset($_SESSION['buys']);
  header("location:products.php");
 ?>
