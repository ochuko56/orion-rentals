<?php
  session_start();

?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Orion Film Rentals: Movies</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/pages.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<?php

  if ( !isset($_SESSION['name']) && empty($_SESSION['name']) ) {
    header("location: account.php");
  }
  elseif ( isset($_POST["deletemovie"])) {
    include "api/movies/delete.php";
  }

  include "api/movies/read.php";

  $serial = 1;

?>
<body>

<?php include 'layout/header.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12" style="text-align: center!important;">
        <h1 class="display-4">My Movies</h1>
      </div>
    </div>

    <div class="row" id="movie-display">
      <div class="col-md-1">#</div>
      <div class="col-md-4">Title</div>
      <div class="col-md-2">Genre</div>
      <div class="col-md-1">Year</div>
      <div class="col-md-2">Date Uploaded</div>
      <div class="col-md-12"><hr></div>
    </div>

  <?php if ($num == 0): ?>

      <div class="row" id="movie-display">
        <div class="col">You have not uploaded any movies.</div>
      </div>

  <?php else:
      while($row = $result->fetch(PDO::FETCH_ASSOC)):
  ?>
        <div class="row align-items-center" id="movie-display">
          <div class="col-md-1"><?php echo $serial++ ?></div>
          <div class="col-md-4"><?php echo $row["title"] ?></div>
          <div class="col-md-2"><?php echo $row["genre"] ?></div>
          <div class="col-md-1"><?php echo $row["year"] ?></div>
          <div class="col-md-2"><?php echo $row["upload_date"] ?></div>
          <div class="col-md-1 btn"><a href="request.php?edit=<?php echo $row['title'] ?>"><button class="btn btn-info movie-btn">Edit</button></a></div>
          <div class="col-md-1 btn"><a href="api/movies/delete.php?delete=<?php echo $row['title'] ?>"><button type="submit" class="btn btn-danger movie-btn" name="deletemovie">Delete</button></a></div>
        </div>

  <?php endwhile ?>
  <?php endif ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validation.js"></script>
</body>
</html>