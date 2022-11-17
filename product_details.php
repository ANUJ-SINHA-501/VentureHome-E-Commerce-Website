<!DOCTYPE html>

<?php
  session_start();
  include("dbcon.php");
   ?>
<script src="jquery-3.6.1.min.js" charset="utf-8"></script>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial
         scale=1.0">
      <title>Product Description</title>
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css2?
         family=Poppins:wght@300;400;500;600; 700&display=swap"
         rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font
         awesome/4.7.0/css/font-awesome.min.css">

         <script>
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";
            function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
            MenuItems.style.maxHeight = "200px";
            }
            else
            {
            MenuItems.style.maxHeight = "0px"
            }
            }
         </script>
         <script>
            var ProductImg = document.getElementById(" ProductImg") ;
            var SmallImg = document.getElementsByClassName("small-img");
            SmallImg[0].onclick = function()
            {
            ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1] .onclick = function()
            {
            ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2] .onclick = function()
            {
            ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3] .onclick = function()
            {
            ProductImg.src = SmallImg[3].src;
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
        <?php
          $pn=$_GET['rowid'];
          $select_q="SELECT * FROM `products` WHERE product_name ='$pn'";
          $resultq=mysqli_query($con,$select_q);
          $row=mysqli_fetch_assoc($resultq);
          $product_title=$row['product_name'];
          $product_price=$row['product_price'];
          $product_image=$row['product_image'];
          $product_desc=$row['description'];
          //echo "<h1>$product_title</h1>";
          $hrs="addcart.php?prid=".$pn;
          echo "<div class='small-container single-product'>
              <div class='row'>
                 <div class='col-2'>
                    <img src='images/$product_image' width='100%' id='ProductImg'>
                    <div class='small-img-row'>
                       <div class='small-img-col'>

                       </div>

                       <div class='small-img-col'>

                       </div>
                       <div class='small-img-col'>

                       </div>
                    </div>
                 </div>
                 <div class='col-2'>
                    <p>Home Furnishing/Dining Table Set</p>
                    <h1>$product_title</h1>
                    <h4>Rs. $product_price</h4>

                    <form style='width:140px' id='sbs' action='addcart.php' method='post'>
                    <input type= 'number' value='1' id='numbers' name='numbers'>

                    <input type='hidden' value='$pn' id='nums' name='nums'>";
                  ?>
                    <a href="#"; class='btn'; onclick="fn2()"> Add To Cart </a>

                    <?php echo "</form>";?>
                    <script type="text/javascript">
                      function fn2(){
                        document.getElementById("sbs").submit();
                      }
                    </script>
                    <?php echo "<h3>Product Details<i class='fa fa-indent'></i></h3>
                    <br>
                    <p>$product_desc
                    </p>
                 </div>
              </div>
           </div>";
         ?>

         <div class="small-container">
            <div class="row_row-2">

            </div>
         </div>
         <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">

            </div>
            <div class="col-4">

            </div>
            <div class="col-4">
            </div>
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
