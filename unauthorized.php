<?php
session_start();
if(!(isset($_SESSION["user"]) && isset($_SESSION["pwd"]))){
  header("location: index.php");
  exit();
}
?>
