<?php
session_start();

include('dbconnect.php');

if(!(isset($_POST['inputEmail']) && !empty($_POST['inputEmail']) && isset($_POST['inputPassword']) && !empty($_POST['inputPassword']))){
  echo("<h2>Enter your login and password !</h2>");
?>
<a href="index.php">Retour à la page d'acceuil</a>
<?php
}
else {
  $user = htmlentities($_POST['inputEmail']);
  $pass = htmlentities($_POST['inputPassword']);

  if(login($user, $pass)){
    $_SESSION['user']=$user;
    header("location: loggedin.php");
  }
  else{
    header("location: index.php");
  }

}

 ?>
