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

      <div class="row">

        <div class="col-md-2"></div>

        <div class="col-md-8">
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
          <br>

          <a href="index.php">Back</a>
          
        </div>

        <div class="col-md-2"></div>

      </div>
    </div>

  </body>
</html>
