<?php include("unauthorized.php");?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo strtoupper($_SESSION['user']);?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <?php include('header.php'); ?>
    <?php include('profilForm.php'); ?>
    <?php include("footer.php"); ?>
  </body>

  </html>
