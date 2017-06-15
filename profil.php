<?php include("unauthorized.php");?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profil</title>
    <?php include('head.php'); ?>
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="container">
      <p>Salut <?php if(isset($_GET['name'])) echo $_GET['name']; ?></p>
      <p>Cookie : <?php if(isset($_COOKIE['pseudo'])) echo $_COOKIE['pseudo']; ?></p>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
