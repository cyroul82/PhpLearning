<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>New Car</title>
    <?php include('head.php'); ?>
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="container">
      <p><?php
        echo $car;
        $car->repaint('blue');
        echo "<br>Repaint in blue : " . $car->getCoulor() ;
       ?></p>


    </div>

  </body>
</html>
