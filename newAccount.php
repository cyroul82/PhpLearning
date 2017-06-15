<?php
session_start();
if(isset($_SESSION['user'])){
  session_destroy();
} ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>New Account</title>
    <?php include('head.php'); ?>
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="container">
      <form class="" action="newAccountControl.php" method="post">
        <div class="form-group">
          <label for="firstname">Firstname</label>
          <input type="text" name="firstname" class="form-control" value="" placeholder="firstname" required>
        </div>
        <div class="form-group">
          <label for="username">Surname</label>
          <input type="text" name="surname" class="form-control" value="" placeholder="surname" required>
        </div>
        <div class="form-group">
          <label for="username">Email</label>
          <input type="email" name="email" class="form-control" value="" placeholder="email" required>
        </div>
       <div class="form-group">
          <label for="username">Password</label>
          <input type="password" name="pass" class="form-control" value="" placeholder="password" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <button type="reset" class="btn btn-default">reset</button>
      </form>
      <a href="index.php">Back to login page</a>
    </div>

    <?php include('footer.php'); ?>
  </body>
</html>
