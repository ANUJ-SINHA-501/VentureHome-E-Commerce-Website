<?php
  session_start();
  include("dbcon.php");
 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial
         scale=1.0">
      <title>All Products</title>
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css2?
         family=Poppins:wght@300;400;500;600; 700&display=swap"
         rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font
         awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript">

    //Javascript
    function changeSession(){
    var value="false";
    var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
            {
                alert(xmlHttp.responseText);
            }
        }
        xmlHttp.open("post", "session.php");
        xmlHttp.send(value);//Don't know how to send multiple data with this sorry, so sending only 1
    }
    </script>

   </head>

   <body>
      <div class="header">
      <div class="container">
         <div class="navbar">
            <div class="logo">
               <img src="images/logo.png" width="125px">
            </div>
            <nav>
               <ul id="MenuItems">
                  <li><a href="\IWP_PROJECT\front_page.php"> Home </a></li>
                  <li><a href="products.php"> Products </a></li>
                  <li><a href=""> About </a></li>
                  <li><a href=""> Contact </a></li>
                  <?php if (isset($_SESSION['username'])) {
                    echo("<li><a href='/IWP_PROJECT/logout.php'>{$_SESSION['username']}");
                  }else {
                    echo "<li><a href='account.php'>Account";
                  } ?>
                  </a></li>
               </ul>
            </nav>
            <a href="index.php"><img src=" images/cart.png" width="30px" height="30px"></a>

         </div>
      </div>
      <div class="small-container">
         <div class="row row-2">
            <h2>All Products</h2>
            <select>
               <option>Default Sorting</option>
               <option>Sort by price</option>
               <option>Sort by popularity</option>
               <option>Sort by rating</option>
               <option>Sort by sale</option>
            </select>
         </div>
         <div class="row">
         <?php
            $select_q="SELECT * FROM `products`";
            $resultq=mysqli_query($con,$select_q);
            while ($row=mysqli_fetch_assoc($resultq)) {
              $product_title=$row['product_name'];
              $product_price=$row['product_price'];
              $product_image=$row['product_image'];
              $_SESSION["productch"]=$product_title;
              $hrs="product_details.php?rowid=".$product_title;
              echo "
                 <div class='col-4'>
                    <a href=$hrs ><img src='images/$product_image'></a>
                    <h4>$product_title</h4>
                    <div class='rating'>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star'></i>
                       <i class='fa fa-star-o'></i>
                    </div>
                    <p>Rs $product_price</p>
                 </div>
              ";
            }

          ?>
        </div>

         <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
         </div>
      </div>
      <div class="footer">
      <div class="container">
         <div class="row">
            <div class="footer-col-1">
               <h3>Download Our App</h3>
               <p>Download App for Android and ios mobile phone.</p>
               <div class="app-logo">
                  <img src=" images/play-store.png">
                  <img src="images/play-store.png">
               </div>
            </div>
            <div class="footer-col-2">
               <img src="images/logo (1).png" alt="">

            </div>
            <div class="footer-col-3">
               <h3>Useful Links</h3>
               <ul>
                  <li>Coupons</li>
                  <li>Blog Post</li>
                  <li>Return Policy</li>
                  <li>Join Affiliate</li>
               </ul>
            </div>
            <div class="footer-col-4">
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
