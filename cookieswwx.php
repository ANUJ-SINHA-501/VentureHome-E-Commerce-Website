<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="text-align:center;">
    <h1>ENTER YOUR USERNAME AND EMAIL ID</h1>
    <?php
      setcookie("abcd","abcd@gmail.com",time() + 86400*3);
      $em="";
      $un="";
      if(isset($_POST["uname"])){
        $un=$_POST["uname"];

        if (isset($_COOKIE["$un"])) {
          $em=$_COOKIE["$un"];

        }

      }

     ?>
    <form name="info" action="" method="post">
      Enter your username <input type="text" name="uname" onchange="this.form.submit()" value="<?php echo $un ?>"> <br> <br>
      Enter your Email id <input type="email" name="email" value="<?php if (isset($_COOKIE[$un])) echo $_COOKIE[$un]; ?>" onchange="this.form.submit()">
    </form>

  </body>
</html>
