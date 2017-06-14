<?php include("unauthorized.php");?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include("header.php") ?>
    <div class="container">
      <div class="col-md-2"></div>

      <div class="col-md-8">
        <form id="profilForm" action="profilControl.php" method="GET">
          <p class="help-block">Please fill up the form in order to continue</p>

          <div class="form-group">
            <label for="inputName">Your name :</label>
            <input type="text" class="form-control" name="inputName" placeholder="Name" required>
          </div>

          <div class="form-group">
            <label for="inputAge">Your age :</label>
            <input type="text" class="form-control" name="inputAge" placeholder="Age" required>
          </div>

          <div class="form-group">
            <label for="status">Your status :</label>
            <input type="radio" class="status" name="status" value="married"> Married
            <input type="radio" class="status" name="status" value="widower"> Widower
            <input type="radio" class="status" name="status" value="single" checked> Single
          </div>

          <div class="form-group">
            <label for="interest">Interest :</label>
              <input class="status" name="interestInternet" type="checkbox" value="internet"> Internet
              <input class="status" name="interestComputers" type="checkbox" value="computers"> Computers
              <input class="status" name="interestGames" type="checkbox" value="games"> Games
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
          <button type="reset" class="btn btn-default">Reset</button>
        </form>
      </div>

      <div class="col-md-2"></div>

    </div>

    <?php include("footer.php") ?>
  </body>
</html>
