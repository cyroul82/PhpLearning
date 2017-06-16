<div class="container">

  <nav class="navbar navbar-default nav-menu">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".button-menu">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">
      <?php
      if(isset($_SESSION['FIRSTNAME']) && isset($_SESSION['SURNAME'])){
        echo strtoupper($_SESSION['FIRSTNAME'] . ' ' . $_SESSION['SURNAME']);
      } else {
        echo "Bonjour";
      }
     ?></a>
	</div>

	<div class="collapse navbar-collapse button-menu">
		<ul class="nav navbar-nav ">
            <li><a href="index.php"><i class="fa fa-home"></i> HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
		</ul>
        <?php if(isset($_SESSION['email'])) { ?>
        <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong>Menu</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-left"><strong><?php if(isset($_SESSION['FIRSTNAME'])) echo $_SESSION['FIRSTNAME'] ?></strong></p>
                                        <p class="text-left small"><?php echo $_SESSION['email'] ?></p>
                                        <p class="text-left">
                                            <a href="logout.php" class="btn btn-primary btn-block btn-sm">Logout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>

                    </ul>
                </li>
            </ul>
        <?php }
         ?>
	</div>

  </nav>
</div>
<div class="container">
  <div class="jumbotron text-center">
    <h1>Php Learning</h1>
  </div>
</div>
