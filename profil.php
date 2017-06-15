<?php
include("unauthorized.php");
include("voiture.php");
?>

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
      <h3>Salut <?php if(isset($_GET['name'])) echo strtoupper($_GET['name']); ?></h3>
      <!-- <p>Cookie : <?php if(isset($_COOKIE['pseudo'])) echo $_COOKIE['pseudo']; ?></p> -->

      <h3>New Car into your collections !</h3>

      <form action="carControl.php" method="post">
        <div class="form-group">
          <label for="registration">Registration :</label>
          <input type="text" class="form-control" name="registration" placeholder="Registration" required>
        </div>

        <div class="form-group">
          <label for="coulor">Color :</label>
          <input type="text" class="form-control" name="coulor" placeholder="Color" required>
        </div>

        <div class="form-group">
          <label for="weight">Weight :</label>
          <input type="text" class="form-control" name="weight" placeholder="Weight" required>
        </div>

        <div class="form-group">
          <label for="power">Power :</label>
          <input type="text" class="form-control" name="power" placeholder="Power" required>
        </div>

        <div class="form-group">
          <label for="capacity">Tank Capacity :</label>
          <input type="text" class="form-control" name="capacity" placeholder="Capacity" required>
        </div>

        <div class="form-group">
          <label for="place">Place in the car :</label>
          <input type="text" class="form-control" name="place" placeholder="Place" required>
        </div>

        <button type="submit" class="btn btn-default">Add Car</button>
        <button type="reset" class="btn btn-default">Reset</button>
      </form>
      <?php
        $car = new voiture('123df21', 'black', '1T', '250H', '80L', '5');
        echo $car->getCoulor();
        echo $car->getInsurance() ? 'true' : 'false';
      ?>

    </div>
<!-- <?php include('footer.php'); ?> -->
  </body>
</html>
