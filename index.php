<?php
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Orion Film Rentals</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>

<?php include 'layout/header.php'; ?>

<!-- *****************CAROUSEL***************** -->
	<div class="container-fluid">
		<div id="carouselExampleFade" class="carousel slide" data-ride="carousel">

		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<div class="container">
					  <div class="carousel-caption text-center">
					    <h1 class="display-4">Orion Film Rentals</h1>
					    <p class="lead">Rent movies at affordable rates from our impressive library of movies. Our collection of Hollywood, Nollywood, and Bollywood movies will ensure your appetite for good movies is well satisfied.</p>
					  </div>
		    	</div>
		    </div>
		    <div class="carousel-item">
		      <div class="container">
					  <div class="carousel-caption text-center">
					    <h1 class="display-4">Over 10,000 Movies</h1>
					    <p class="lead">Rent movies at affordable rates from our impressive library of movies. Our collection of Hollywood, Nollywood, and Bollywood movies will ensure your appetite for good movies is well satisfied.</p>
					  </div>
		    	</div>
		    </div>
		    <div class="carousel-item">
		      <div class="container">
					  <div class="carousel-caption text-center">
					    <h1 class="display-4">Free Delivery</h1>
					    <p class="lead">Rent movies at affordable rates from our impressive library of movies. Our collection of Hollywood, Nollywood, and Bollywood movies will ensure your appetite for good movies is well satisfied.</p>
					  </div>
		    	</div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<!-- *****************CAROUSEL***************** -->

	<div class="container">
		<div class="row">
			<div class="col-md-1 md-pad">
				<hr>
			</div>
			<div class="col-md-2 md-pad text-center">
				<h5>Blockbusters</h5>
			</div>
			<div class="col-md-9 md-pad">
				<hr>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div style="height: 600px;" class="col-md-6 md-pad">
				<div class="card">
				  <img class="card-img" src="img/mission.jpg" alt="Card image">
				  <div class="card-img-overlay">
				    <h4 class="card-title">Mission Impossible: Fallout</h4>
				    <button>&#8358;1000</button>
				  </div>
				</div>
			</div>

			<div style="height: 600px;" class="col-md-6">
				<div class="row">
					<div style="height: 300px;" class="col-md-6 md-pad">
						<div class="card">
						  <img class="card-img" src="img/ready-player-1.jpg" alt="Card image">
						  <div class="card-img-overlay">
						    <h4 class="card-title">Ready Player One</h4>
						    <button>&#8358;1000</button>
						  </div>
						</div>
					</div>
					<div style="height: 300px;" class="col-md-6 md-pad">
						<div class="card">
						  <img class="card-img" src="img/sicario-2.jpg" alt="Card image">
						  <div class="card-img-overlay">
						    <h4 class="card-title">Sicario 2</h4>
						    <button>&#8358;1000</button>
						  </div>
						</div>
					</div>
					<div style="height: 300px;" class="col-md-12 md-pad">
						<div class="card">
						  <img class="card-img" src="img/the-incredibles-2.jpg" alt="Card image">
						  <div class="card-img-overlay">
						    <h4 class="card-title">The Incredibles 2</h4>
						    <button>&#8358;1000</button>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-1 md-pad">
				<hr>
			</div>
			<div class="col-md-2 md-pad text-center">
				<h5>Latest Movies</h5>
			</div>
			<div class="col-md-6 md-pad">
				<hr>
			</div>
			<div class="col-md-2 md-pad text-center">
				<h5><a href="gallery.html">Browse All</a></h5>
			</div>
			<div class="col-md-1 md-pad">
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 md-pad">
				<div class="card">
				  <img class="card-img" src="img/solo.jpg" alt="Card image">
				  <div class="card-img-overlay">
				    <h4 class="card-title">Solo</h4>
				    <button>&#8358;500</button>
				  </div>
				</div>
			</div>
			<div class="col-md-3 md-pad">
				<div class="card">
				  <img class="card-img" src="img/red-sparrow.jpg" alt="Card image">
				  <div class="card-img-overlay">
				    <h4 class="card-title">Red Sparrow</h4>
				    <button>&#8358;500</button>
				  </div>
				</div>
			</div>
			<div class="col-md-3 md-pad">
				<div class="card">
				  <img class="card-img" src="img/deadpool-2.jpg" alt="Card image">
				  <div class="card-img-overlay">
				    <h4 class="card-title">Deadpool 2</h4>
				    <button>&#8358;500</button>
				  </div>
				</div>
			</div>
			<div class="col-md-3 md-pad">
				<div class="card">
				  <img class="card-img" src="img/avengers.jpg" alt="Card image">
				  <div class="card-img-overlay">
				    <h4 class="card-title">Avengers</h4>
				    <button>&#8358;500</button>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-1 md-pad">
				<hr>
			</div>
			<div class="col-md-2 md-pad text-center">
				<h5>Upcoming Movies</h5>
			</div>
			<div class="col-md-6 md-pad">
				<hr>
			</div>
			<div class="col-md-2 md-pad text-center">
				<h5><a href="#">Request a Movie</a></h5>
			</div>
			<div class="col-md-1 md-pad">
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 md-pad">
				<div class="card">
				  <img class="card-img" src="img/the-predator.jpg" alt="Card image">
				  <div class="card-img-overlay">
				    <h4 class="card-title">The Predator</h4>
				  </div>
				</div>
			</div>
			<div class="col-md-3 md-pad">
				<div class="card">
				  <img class="card-img" src="img/sorry.jpg" alt="Card image">
				  <div class="card-img-overlay">
				    <h4 class="card-title">Sorry To Bother You</h4>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container-fluid">
			<div class="row" id="contact">
				<div class="col-md-12">
					<h2 class="footer-title">Orion Film Rentals</h2>
				</div>
			</div>

			<div class="row footer-color">
				<div class="col-md-5 address">
					<p><i class="fas fa-phone"></i>  +2347036161822</p>
					<p><i class="far fa-envelope"></i>  johndoe@example.com</p>
					<p><i class="fas fa-map-marker-alt"></i>  35A Okota Rd,</p>
					<p>Okota,</p>
					<p>Lagos State.</p>
				</div>

				<div class="col-md-4 address">
					<p>Privacy Policy</p>
					<p>Terms and Conditions</p>
				</div>

				<div class="col-md-3">
					<ul class="social-icons">
						<li><a style="color: #054f96" href="#"><i class="fab fa-facebook-square"></i></a></li>
						<li><a style="color: #5fe0ff" href="#"><i class="fab fa-twitter-square"></i></a></li>
						<li><a style="color: #e208e2" href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>

				<div class="col-md-12 text-center">
					&copy; 2018, Orion Film Rentals
				</div>
			</div>
		</div>
	</footer>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validation.js"></script>
</body>
</html>