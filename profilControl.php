<?php include("unauthorized.php");?>
<?php
if(isset($_GET['inputName']) && $_GET['inputName'] != '' && isset($_GET['inputAge']) && $_GET['inputAge'] != '' && isset($_GET['status'])){
  $_SESSION['inputName'] = htmlentities($_GET['inputName']);
  $_SESSION['inputAge'] = htmlentities($_GET['inputAge']);
  $_SESSION['status'] = $_GET['status'];

  if(isset($_GET['interest'])){
    foreach ($_GET['interest'] as $item) {
      if($item == "internet"){
        $_SESSION['internet'] = true;
      }
      else if($item == "computers"){
        $_SESSION['computers'] = true;
      }
      else if($item == "games"){
        $_SESSION['games'] = true;
      }
    }
  }
  header("location: profil.php");
}
else {
  header("location: errorPage.php");
  exit();
}
?>
