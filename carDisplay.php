<?php require('unauthorized.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cars</title>
    <?php include('head.php') ?>
  </head>
  <body>
    <?php include('header.php') ?>
    <div class="container">
      <table class="table table-striped table-hover">
        <tr>
          <th>Registration</th>
          <th>Color</th>
          <th>Weight</th>
          <th>Power</th>
          <th>Capacity</th>
          <th>Places</th>
          <th>Fuel</th>
          <th>Insurance</th>
          <th>Message</th>
        </tr>
        <?php
          require('voiture.php');
          $car = new voiture('123-df-21', 'black', '1T', '250H', '80L', '5');
          $car->setInsurance(true);
          $cars=array($car);

          $car = new voiture('584-rg-45', 'red', '1.5T', '320H', '70L', '4');
          $car->repaint('black');
          array_push($cars, $car);

          $car = new voiture('487-gt-41', 'blue', '1.3T', '230H', '61L', '5');
          array_push($cars, $car);

          $car = new voiture('897-po-12', 'green', '1.5T', '170H', '52L', '6');
          array_push($cars, $car);

          $car = new voiture('369-cv-56', 'red', '1.1T', '140H', '65L', '5');
          array_push($cars, $car);

          $car = new voiture('625-wx-95', 'yellow', '0.8T', '70H', '48L', '4');
          array_push($cars, $car);
          
          foreach($cars as $c){
        ?>
            <tr>
              <td><?php echo $c->getRegistration(); ?></td>
              <td><?php echo $c->getCoulor(); ?></td>
              <td><?php echo $c->getWeight(); ?></td>
              <td><?php echo $c->getPower(); ?></td>
              <td><?php echo $c->getCapacity(); ?></td>
              <td><?php echo $c->getPlace(); ?></td>
              <td><?php echo $c->getFuel(); ?></td>
              <td><?php echo ($c->getInsurance()) ? 'yes' : 'no'; ?></td>
              <td><?php echo $c->getMessage(); ?></td>
            </tr>
          <?php
          }
         ?>
      </table>

      <br>
      <a href="index.php">Back</a>

    </div>


     <!-- <?php

       echo $car->getCoulor();
       echo $car->getInsurance() ? 'true' : 'false';
     ?> -->
  </body>
</html>
