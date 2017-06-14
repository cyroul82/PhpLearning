<!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Cyril Rat">
    <meta name="description" content="AFPA Learning">
    <title>Php Learning</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>

      <?php include("header.php") ?>

        <div class="container">

          <div class="col-md-2"></div>

          <div class="col-md-8">
          <form id="login" action="login.php" method="post">

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
        </div>

        <div class="col-md-2"></div>

        </div>



<?php include("footer.php"); ?>
</body>

</html>
