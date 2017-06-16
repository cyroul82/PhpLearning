<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
  $name = htmlentities($_POST['name']);
  $email = htmlentities($_POST['email']);
  $subject = htmlentities($_POST['subject']);
  $message = htmlentities($_POST['message']);
  $headers = 'From: ' . $email . "\r\n" .
     'Reply-To: '. $email . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
  $to = 'cyril.rat@gmail.com';

  $message = wordwrap($message, 70, "\r\n");
  var_dump($message);
  $send = mail($to, $subject, $message, $header);
  var_dump($send);
if (!$send) {
    $errorMessage = error_get_last()['message'];
    header("location: contactSent.php?error=" . $errorMessage);
}
else {
  header("location: contactSent.php");
}
}
else {
  var_dump("salut");
}
  ?>
