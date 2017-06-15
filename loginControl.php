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
  $email = htmlentities($_POST['inputEmail']);
  $pass = htmlentities($_POST['inputPassword']);

  if(login($email, $pass)){
    $_SESSION['email']=$email;
    $profil = getUserProfil($email);
    $_SESSION['FIRSTNAME']=$profil['FIRSTNAME'];
    $_SESSION['SURNAME']=$profil['SURNAME'];
    header("location: index.php");
  }
  else{
    header("location: login.php?error=login");
  }

}

 ?>
