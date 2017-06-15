<?php
include('dbConnect.php');

if(isset($_POST['firstname']) && !empty($_POST['firstname']) &&
   isset($_POST['surname']) && !empty($_POST['surname']) &&
   isset($_POST['email']) && !empty($_POST['email']) &&
   isset($_POST['pass']) && !empty($_POST['pass'])){

  $newUser = array('firstname'=> htmlentities($_POST['firstname']),
              'surname' => htmlentities($_POST['surname']),
              'email' => htmlentities($_POST['email']),
              'pass' => htmlentities($_POST['pass']));

  if(emailExists($newUser['email'])){
    header("location: newAccount.php");
  }
  else {
    addUser($newUser);
    header("location: index.php");
  }

}
?>
