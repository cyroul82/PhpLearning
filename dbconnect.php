<?php
function connect(){
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=login;charset=utf8','afpa','cdi14');
    return $bdd;
  }
  catch(Exception $e) {
    die('error : ' . $e->getMessage());
  }
}

function addUser($user){
  $bdd = connect();
  $req = $bdd-> prepare('insert into usercontact(firstname, surname, email, pass) values(:firstname, :surname, :email, :pass)');
  $req->execute(array('firstname' => $user['firstname'],
                      'surname' => $user['surname'],
                      'email' => $user['email'],
                      'pass' => $user['pass']));
}

function getUserProfil($email=null){
  if(isset($email) && !empty($email)){
    $req = connect()->query("select * from usercontact where email='" . $email . "'");
    $profil = $req->fetch();
    $req->closeCursor();
    return $profil;
  }
}

function login($email, $pass){
  $error;
  if(emailExists($email)){
    $req = connect()->query("select pass from usercontact where email='" . $email . "'");
    $u = $req->fetch();
    if($pass == $u['pass']){
      return true;
    }
  }else {
    $error = array('error'=>'email not found in the DB');
    return false;
  }
}

function emailExists($email)
{
  $response = connect()->query("select * from usercontact where email='" . $email . "'");
  if($response->fetch()){
    return true;
  }
  else {
    return false;
  }
  $response->closeCursor();
}
 ?>
