<?php include("unauthorized.php");?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo strtoupper($_SESSION['user']);?></title>
    <?php include('head.php'); ?>
  </head>
  <body>
    <?php include('header.php'); ?>
    <?php include('profilForm.php'); ?>
    <?php include("footer.php"); ?>
  </body>

  </html>
