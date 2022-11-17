<?php
  include('dbcon.php');
  if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_price=$_POST['product_price'];
    $product_image=$_FILES['product_image']['name'];
    $tmp_name=$_FILES['product_image']['tmp_name'];
    $desc=$_POST['product_desc'];
    move_uploaded_file($tmp_name,"./product_images/$product_image");
    $insert_products="INSERT INTO `products`(`product_name`, `product_price`, `product_image` , `description`) VALUES ('$product_title','$product_price','$product_image','$desc')";
    $result_qu=mysqli_query($con,$insert_products);
    if ($result_qu) {
      echo "<script>alert('products inserted')</script>";
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Products</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    <div class="container mt-3 bg-light" style="width:500px">
      <h1 class="text-center">Insert Products</h1>
      <form class="" action="" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4 w-50 m-auto">
          Product Title <br>
          <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" required> <br>
          Product Price <br>
          <input type="number" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" required> <br>
          Product Image <br>
          <input type="file" name="product_image" id="product_image" class="form-control" placeholder="Enter Product Picture" required> <br>
          Product Description <br>
          <input type="text" name="product_desc" id="product_desc" class="form-control" placeholder="Enter Product Description" required> <br>
          <input type="submit" name="insert_product" class="btn btn-info mb-3 px-5" value="Insert Products">
          <a href="logot.php"><input type="" name="inse" class="btn btn-info mb-2 px-2.3" value="Logout"></a> <br>
        </div>
      </form>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  </body>
</html>
