<?php
  session_start();
  if(isset($_SESSION['email'])){
    header("location: index.php");
  }

 ?>
<!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Cyril Rat">
    <meta name="description" content="AFPA Learning">
    <title>Php Learning</title>

    <?php include('head.php'); ?>
  </head>

  <body>

      <?php include("header.php") ?>

        <div class="container">

          <div class="col-md-3"></div>

          <div class="col-md-6 well well-sm">
            <?php if(isset($_GET['error'])){?>
              <div class="alert alert-danger">
                <strong>Error : </strong> check email and password !
              </div>
              <?php  } ?>
          <form id="login" action="loginControl.php" method="POST">

            <div class="form-group">
              <label for="inputEmail">Email address</label>
              <input type="email" class="form-control" name="inputEmail" placeholder="Email" required>
            </div>

            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" name="inputPassword" placeholder="Password" required>
            </div>

            <div class="form-group text-center">
              <button type="submit" class="btn btn-default">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>

          </form>
          <a href="newAccount.php">Create new account ?</a> <br>
          <a href="#">Lost your password ?</a>
        </div>

        <div class="col-md-3"></div>

        </div>



<?php include("footer.php"); ?>
</body>

</html>
