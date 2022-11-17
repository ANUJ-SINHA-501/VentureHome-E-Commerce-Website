<?php
  session_start();
  include('dbcon.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Venture Home</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="images/logo.png" alt="" width="125px">
        </div>
        <nav>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="New folder\WebsiteL\products.php">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>

              <?php if (isset($_SESSION['username'])) {
                echo("<li><a href='logout.php'>{$_SESSION['username']}");
              }else {
                echo "<li><a href='New folder/WebsiteL/account.php'>Account";
              } ?>
            </a></li>
          </ul>
        </nav>
        <a href="New folder\WebsiteL\index.php"><img src="images/cart.png" alt="" width="30px" height="30px"></a>

      </div>

      <div class="row">
        <div class="col2">
          <h1>Your Last Shopping Stop</h1>
          <p>Come and get all your home shopping needs fullfilled</p>
          <a href="" class="btn">Enter Store &#8594;</a>
        </div>
        <div class="col2">
          <img src="images/logo (1).png">
        </div>
      </div>
    </div>
  </div>

  <div class="category">
    <div class="smcon">
      <div class="row">
        <?php
        $select_q="SELECT * FROM `products`";
        $resultq=mysqli_query($con,$select_q);
        $cnt=0;
        while ($cnt<3) {
          $row=mysqli_fetch_assoc($resultq);
          $product_title=$row['product_name'];
          $product_price=$row['product_price'];
          $product_image=$row['product_image'];
          $hrs='New folder/WebsiteL/product_details.php?rowid='.$product_title;
          echo "<div class='col3'>
            <img src='New folder/WebsiteL/images/$product_image' alt>
          </div>" ;
          $cnt++;
        }
        $cnt=0;
         ?>
      </div>
    </div>
  </div>

  <div class="smcon">
    <h2 class="title">Featured Products</h2>
    <div class="row">
      <?php
      $select_q="SELECT * FROM `products`";
      $resultq=mysqli_query($con,$select_q);
      $cnt=0;
      while ($cnt<4) {
        $row=mysqli_fetch_assoc($resultq);
        $product_title=$row['product_name'];
        $product_price=$row['product_price'];
        $product_image=$row['product_image'];
        $hrs='New folder/WebsiteL/product_details.php?rowid='.$product_title;

        echo "<div class='col4'>
          <a href='New folder/WebsiteL/product_details.php?rowid=$product_title'><img src='New folder/WebsiteL/images/$product_image'></a>
          <h4>$product_title</h4>
          <p>$product_price</p>
        </div>";
        $cnt++;
      }
       ?>
    </div>

  </div>

  <div class="footer">
  <div class="container">
     <div class="row">
        <div class="footercol1">
           <h3>Download Our App</h3>
           <p>Download App for Android and ios mobile phone.</p>
           <div class="app-logo">
              <img src=" images/play-store.png">
              <img src="images/play-store.png">
           </div>
        </div>
        <div class="footercol2">
           <img src="images/logo (1).png" alt="">

        </div>
        <div class="footercol3">
           <h3>Useful Links</h3>
           <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
           </ul>
        </div>
        <div class="footercol4">
           <h3>Follow us</h3>
           <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>YouTube</li>
           </ul>
        </div>
        <hr><hr>
        <p class="">Copyright 2022 VentureHome</p>
     </div>
  </div>

  </body>
</html>
