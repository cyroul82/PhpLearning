<?php require('unauthorized.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo 1 Display</title>
    <?php include('head.php'); ?>
  </head>
  <body>
    <?php include('header.php');?>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <?php if(isset($_GET['name'])) echo "<h1>Salut ". strtoupper($_GET['name']) . "</h1>";
                if(isset($_GET['age'])) echo "<p>Age: " . $_GET['age'] . "</p>";
                if(isset($_GET['status'])) echo "<p>Status: " . $_GET['status'] . "</p>";
                $interests='Interests: ';
                if(isset($_GET['internet'])) $interests .= "Internet - ";
                if(isset($_GET['computers'])) $interests .= "Computers - ";
                if(isset($_GET['games'])) $interests .= "Games ";
                echo "<p>$interests</p>";
          ?>
          <a href="index.php">Back</a>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>

  </body>
</html>
