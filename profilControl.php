<?php include("unauthorized.php");?>
<?php

$interestInternet = false;
$interestComputers= false;
$interestGames = false;

if(isset($_GET['inputName']) && !empty($_GET['inputName']) ){
  $inputName = $_GET['inputName'];
}
else {
  echo"ioey";
}
if(isset($_GET['inputAge']) && !empty($_GET['inputAge'])){
  $inputAge = $_GET['inputAge'];
}

if(isset($_GET['status'])){
  $status = $_GET['status'];
}

if(isset($_GET['interestInternet'])){
  $interestInternet = true;
}

  if(isset($_GET['interestComputers'])){
    $interestComputers = true;
  }

  if(isset($_GET['interestGames'])){
    $interestGames = true;
  }

  foreach($_GET as $key => $element){
    echo $key . ' : ' . $element . '<br>';
  }



?>
