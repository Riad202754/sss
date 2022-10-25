<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="siteURLParameters.php" method="get">
      Password:<input type="text" name="Password"><br>
      <input type="submit">

    </form>
    <br></br>

    <?php
    echo $_GET["Password"];
     ?>
  </body>
</html>
