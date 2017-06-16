<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sent</title>
    <?php include('head.php'); ?>
  </head>
  <body>
    <?php include('header.php'); ?>
    <?php if(isset($_GET[error])){
      echo "<button type="button" class="btn btn-warning">Message not Sent, check your form </button>";
      echo "<br> <a href=\"contact.php\">Back</a>";

    }
    else {
      echo "<button type="button" class="btn btn-success">Message Sent, I'll come back to you ASAP</button>";
    } ?>

  </body>
</html>
