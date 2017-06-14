<?php
session_start();

if(!(isset($_POST['inputEmail']) && !empty($_POST['inputEmail']) && isset($_POST['inputPassword']) && !empty($_POST['inputPassword']))){
  echo("<h2>Enter your login and password !</h2>");
?>
<a href="index.php">Retour à la page d'acceuil</a>
<?php
}
else {
  $_SESSION['inputEmail'] = htmlentities($_POST['inputEmail'], ENT_QUOTES | ENT_IGNORE, "UTF-8");
  $_SESSION['inputPassword'] = htmlentities($_POST['inputPassword'], ENT_QUOTES | ENT_IGNORE, "UTF-8");
  header("location: loggedin.php");
}
 ?>
