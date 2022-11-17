<?php
session_start();
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



if (isset($_POST['add'])) {
  $fn=$_POST['fn'];
  $lan=$_POST['lan'];
  $dsg=$_POST['dsg'];
  $ad1=$_POST['ad1'];
  $ad2=$_POST['ad2'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $em=$_POST['em'];
  $ins="INSERT INTO `adbook`(`fname`, `lname`, `desig`, `ad1`, `ad2`, `city`, `state`, `email`) VALUES ('$fn','$lan','$dsg','$ad1','$ad2','$city','$state','$em')";
  $rsq=mysqli_query($con,$ins);
  if($rsq){
    echo "<script>alert('products inserted')</script>";
  }
}elseif (isset($_POST['edit'])){
  $ad1=$_POST['ad1'];
  $ad2=$_POST['ad2'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $em=$_POST['em'];

  $upds="UPDATE `adbook` SET `ad1`='$ad1',`ad2`='$ad2',`city`='$city',`state`='$state' WHERE `email`='$em'";
  $rsq=mysqli_query($con,$upds);
  if($rsq){
    echo "<script>alert('products inserted')</script>";
  }
}elseif (isset($_POST['delete'])) {
  $em=$_POST['em'];

  $dls="DELETE FROM `adbook` WHERE `email`='$em'";
  $rsq=mysqli_query($con,$dls);
  if($rsq){
    echo "<script>alert('products inserted')</script>";
  }
}elseif (isset($_POST['show'])) {
  $em=$_POST['em'];

  $select_q="SELECT * FROM `adbook` where `email`='$em'";
  $resultq=mysqli_query($con,$select_q);
  $row=mysqli_fetch_assoc($resultq);
  $ad1=$row['ad1'];
  $ad2=$row['ad2'];
  $city=$row['city'];
  $state=$row['state'];

  $_SESSION['ad1']=$ad1;
  $_SESSION['ad2']=$ad2;
  $_SESSION['city']=$city;
  $_SESSION['state']=$state;

  header('location:dsp.php');

}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body style="">
     <center>
     <div style="width:500px;">
       <h1 class="text-center">Address Book</h1>
       <form class="" action="" method="post" enctype="multipart/form-data">
         <div class="form-outline mb-4 w-50 m-auto">
           First name <br>
           <input type="text" name="fn" id="fn" class="form-control" placeholder="Enter First Name"> <br>
           Last name <br>
           <input type="text" name="lan" id="lan" class="form-control" placeholder="Enter Last Name"> <br>
           Designation <br>
           <input type="text" name="dsg" id="dsg" class="form-control" placeholder="Enter Designation" > <br>
           Address 1<br>
           <textarea type="text" name="ad1" id="ad1" class="form-control" placeholder="Enter Address 1"></textarea> <br>
           Address 2 <br>
           <textarea type="text" name="ad2" id="ad2" class="form-control" placeholder="Enter Address 2" ></textarea> <br>
           City <br>
           <input type="text" name="city" id="city" class="form-control" placeholder="Enter Product Price" > <br>
           State <br>
           <input type="text" name="state" id="state" class="form-control" placeholder="Enter Product Price" > <br>
           Email<br>
           <input type="email" name="em" id="em" class="form-control" placeholder="Enter Product Price"> <br>
           <br><br>
           <input type="submit" name="add" class="btn btn-info mb-3 px-3" value="Add">

           <input type="submit" name="edit" class="btn btn-info mb-3 px-3" value="Edit">

           <input type="submit" name="delete" class="btn btn-info mb-3 px-3" value="Delete">

           <input type="submit" name="show" class="btn btn-info mb-3 px-3" value="Show">
         </div>
       </form>
     </div>
   </center>
   </body>
 </html>
