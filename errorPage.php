<?php include("unauthorized.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Error</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <?php include("header") ?>
    <p><?php if(isset($_SESSION['ERROR_MESSAGE'])){
      echo $_SESSION['ERROR_MESSAGE'];
    }else
    echo "Unknown Error" ?></p>
    <?php include("footer") ?>
  </body>
</html>
