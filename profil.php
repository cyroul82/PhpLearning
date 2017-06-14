<?php include("unauthorized.php");?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="container">
      <p>Merci <?php echo $_GET['name']; ?></p>
      <p>Cookie : <?php echo $_COOKIE['pseudo']; ?></p>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
