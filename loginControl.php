<?php
session_start();

if(!(isset($_POST['inputEmail']) && !empty($_POST['inputEmail']) && isset($_POST['inputPassword']) && !empty($_POST['inputPassword']))){
  echo("<h2>Enter your login and password !</h2>");
?>
<a href="index.php">Retour à la page d'acceuil</a>
<?php
}
else {
  echo "salut";
  $_SESSION['user'] = htmlentities($_POST['inputEmail']);
  $_SESSION['pwd'] = htmlentities($_POST['inputPassword']);
  header("location: loggedin.php");
}

 ?>
