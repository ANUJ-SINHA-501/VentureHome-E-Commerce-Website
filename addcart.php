<?php
  session_start();
  $pr=$_POST['nums'];
  $pr=$pr.' '.$_POST['numbers'];
  //echo $_POST['numbers'];
  $psa="";
  if (!$_SESSION['buys']) {
    $_SESSION['buys']=$pr;
  }else {
    // code...
    $psa=$_SESSION['buys'];
    $_SESSION['buys']=$psa.",".$pr;
  }
echo $_SESSION['buys'];
  header("location:products.php");
 ?>
