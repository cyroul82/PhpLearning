<?php include("unauthorized.php");?>
<?php
if(isset($_GET['inputName']) && $_GET['inputName'] != '' && isset($_GET['inputAge']) && $_GET['inputAge'] != '' && isset($_GET['status'])){
  $name = htmlentities($_GET['inputName']);
  $age = htmlentities($_GET['inputAge']);
  $status = $_GET['status'];

  $params = "?name=$name&age=$age&status=$status";

  if(isset($_GET['interest'])){
    foreach ($_GET['interest'] as $item) {
      if($item == "internet"){
        $internet = true;
        $params .= "&internet=$internet";
      }
      else if($item == "computers"){
        $computers = true;
        $params .= "&computers=$computers";

      }
      else if($item == "games"){
        $games = true;
        $params .= "&games=$games";
      }
    }
  }
  setcookie('pseudo', $name, time() + 365*24*3600, null, null, false, true);

  header("location: exo1Display.php$params" );

}
else {
  header("location: errorPage.php");
  exit();
}
?>
