<?php
  session_start();

?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Orion Film Rentals: Request</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/pages.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<?php

  if ( !isset($_SESSION['name']) && empty($_SESSION['name']) ) {
    header("location: users.php");
  }

  include 'db.php'; //Database connection
  $id = $_SESSION['id'];
  $result = $conn->query("SELECT * FROM `movies` WHERE user_id='$id'");

  $serial = 1;

?>
<body>

	<header class="fixed-top">
    <div class="container-fluid">

    <nav class="navbar navbar-expand-lg">
      <!-- *************NAVBAR LOGO*********** -->
      <a class="navbar-brand title" href="index.php"><i class="fas fa-volleyball-ball"></i>  ORION</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><img src="img/menu-icon.png"></span>
      </button>
      <!-- ***********NAVBAR LINKS************* -->
      <div class="collapse navbar-collapse nav-bar-right" id="navbarTogglerDemo02">
        <ul class="navbar-nav mt-2 mt-lg-0">
          <li>
            <form id="search-form" class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-1" type="search" placeholder="Search Movies...">
              <button id="search-btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="plans.php">Plans</a>
          </li>
          <li class="nav-item">
            <?php
              if( isset($_SESSION['name']) && !empty($_SESSION['name']) ):
                echo '<div class="dropdown nav-link">
                    <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
                      $_SESSION['name'].
                    '</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="profile.php">My Profile</a>
                      <a class="dropdown-item" href="movie.php">My Movies</a>
                      <a class="dropdown-item" href="request.php">Request a Movie</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="users.php?logout=1">Log Out</a>
                    </div>
                  </div>';
              else:
                  echo '<a class="nav-link" href="users.php">Sign In</a>';
              endif;
            ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-md-12" style="text-align: center!important;">
        <h1 class="display-4">My Movies</h1>
      </div>
    </div>

    <div class="row" id="movie-display">
      <div class="col-md-1">#</div>
      <div class="col-md-6">Title</div>
      <div class="col-md-2">Genre</div>
      <div class="col-md-1">Year</div>
      <div class="col-md-2">Date Uploaded</div>
      <div class="col"><hr></div>
    </div>

    <?php

      if ($result->num_rows > 0):

        while($row = $result->fetch_assoc()):
      ?>

          <div class="row" id="movie-display">
            <div class="col-md-1"><?php echo $serial++ ?></div>
            <div class="col-md-6"><?php echo $row["title"] ?></div>
            <div class="col-md-2"><?php echo $row["genre"] ?></div>
            <div class="col-md-1"><?php echo $row["year"] ?></div>
            <div class="col-md-2"><?php echo $row["upload_date"] ?></div>
          </div>

  <?php endwhile ?>
  <?php else: ?>

          <div class="row" id="movie-display">
            <div class="col">You have not uploaded any movies.</div>
          </div>

  <?php endif ?>

  <?php $conn->close(); ?>

  </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validation.js"></script>
</body>
</html>