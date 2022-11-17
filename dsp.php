<?php
session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <center>
       <h1>Address 1</h1><br>
       <?php echo $_SESSION['ad1']; ?>
       <h1>Address 2</h1><br>
       <?php echo $_SESSION['ad2']; ?>
       <h1>City</h1><br>
       <?php echo $_SESSION['city']; ?>
       <h1>State</h1><br>
       <?php echo $_SESSION['state']; ?>
     </center>
   </body>
 </html>
