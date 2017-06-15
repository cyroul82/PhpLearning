<?php
  session_start();
  if(!isset($_SESSION['email'])){
    header("location: login.php");
  }

 ?>
<!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Cyril Rat">
    <meta name="description" content="AFPA Learning">
    <title>Php Learning</title>

    <?php include('head.php'); ?>
  </head>

  <body>

      <?php include("header.php") ?>

        <div class="container">

          <a href="exo1.php"><button type="button" class="btn btn-primary">Exo 1</button></a>

          <a href="addCar.php"><button type="button" class="btn btn-success">Add Car</button></a>

          <a href="carDisplay.php"><button type="button" class="btn btn-warning">List Cars</button></a>

        </div>



<?php include("footer.php"); ?>
</body>

</html>
