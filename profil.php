<?php include("unauthorized.php");?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profil</title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="container">
      <p>Merci <?php echo $_SESSION['inputName']; ?></p>
    </div>
    <?php include('footer.php'); ?>
  </body>
</html>
