<?php
echo "asdhasd";
  session_start();
  echo "HELLO";
  header('location:New folder\WebsiteL\account.html');
  $con = mysqli_connect('localhost','root','','website_checks');
  if($con){
    echo "connection successful";
  }else {
    echo "connection failed";
  }
  
  $name = $_POST['username'];
  $em = $_POST['email'];
  $pass = $_POST['password'];
  $quer = "Select * from userdata where username = '$name' && email = '$em' && password = '$pass'";
  $result = mysqli_query($con,$quer);
  $num = mysqli_num_rows($result);
  if ($num==1) {
    echo "dublicate data";

  }else{
    $querr="insert into userdata(username,email,password) values('$name', '$em', '$pass')";
    mysqli_query($con,$querr);
  }

 ?>
