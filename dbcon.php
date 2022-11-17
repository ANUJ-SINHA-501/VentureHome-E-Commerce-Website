<?php
  $server = "localhost";
  $user = "root";
  $password = "";
  $db = "website_checks";

  $con = mysqli_connect($server,$user,$password,$db);
  if ($con) {
    //echo "success";
  }else{
    //echo "not ";
  }
 ?>
