<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action = "site4.php" method="get">
      <input type= "nubmer" name="num1"
      <br>
        <input type="number" name="num2">
        <input type="submit">


      </form>
    The Answer is:<?php echo $_GET["num1"] + $_GET["num2"] ?>
  </body>
</html>
