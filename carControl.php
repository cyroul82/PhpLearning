<?php
  require('voiture.php');

  if(isset($_POST['registration']) && !empty($_POST['registration'])
  && isset($_POST['coulor']) && !empty($_POST['coulor']) && is_string($_POST['coulor'])
  && isset($_POST['weight']) && !empty($_POST['weight'])
  && isset($_POST['power']) && !empty($_POST['power'] )
  && isset($_POST['capacity']) && !empty($_POST['capacity'])
  && isset($_POST['place']) && !empty($_POST['place'])
     ){

       $registration = htmlentities($_POST['registration']);
       $coulor = htmlentities($_POST['coulor']);
       $weight = htmlentities($_POST['weight']);
       $power = htmlentities($_POST['power']);
       $capacity = htmlentities($_POST['capacity']);
       $place = htmlentities($_POST['place']);
       $car = new voiture($registration, $coulor, $weight, $power, $capacity, $place);

  }
  else {
    header("location: profil.php");
  }

 ?>
