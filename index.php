
	
<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM Clients
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>


<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     
    <title>Dar toda </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    
    <link rel="stylesheet" href="bootstrap.min.css">    
	
    <link rel="stylesheet" href="style.css">    
    
    <link rel="stylesheet" href="responsive.css">
    
    <link rel="stylesheet" href="custom.css">

   

</head>

<body>
<?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <!-- <p><a href="login.php">Log in</a> or <a href="signup.php">sign up</a></p> -->
        
    <?php endif; ?>
	
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img  class="im1" src="logo.webp" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.php">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="create.php">Sign Up</a></li>
						<li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="im6.webp" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>IT’S TIME TO <br> VISIT DAR TODA GUEST HOUSE</strong></h1>
							<p class="m-b-40">Crave new adventures, mystical experiences and relaxing Sahara?<br>  You need to visit Dar toda. We make sure that you’ll get an experience you'll never forget.  <br> 
							</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="im7.webp" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>IT’S TIME TO<br>VISIT DAR TODA GUEST HOUSE </strong></h1>
							<p class="m-b-40">  
								Crave new adventures, mystical experiences and relaxing Sahara?<br>  You need to visit Dar toda. We make sure that you’ll get an experience you'll never forget.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="im10.webp" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>IT’S TIME TO<br>VISIT DAR TODA GUEST HOUSE </strong></h1>
							<p class="m-b-40">Crave new adventures, mystical experiences and relaxing Sahara?<br>  You need to visit Dar toda. We make sure that you’ll get an experience you'll never forget.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="im5.webp" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>A PLACE TO BE <span>DAR TODA</span></h1>
						<h4>Little Story</h4>
						<p>Dar Toda sits in the Draa Valley, next to the peaceful Zagora palm grove. Set in a Moorish palace, it offers views of the desert landscape and large outdoor palms view.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							<button data-filter=".drinks">Rooms</button>
							<button data-filter=".lunch">Food</button>
							<button data-filter=".dinner">Experiences</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="im11.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Rooms 1</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $7.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="im12.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Rooms2</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $9.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="im16.webp" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Rooms 3</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $10.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="im18.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special food 1</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $15.79</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="im32.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special food 1</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $15.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="im15.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special food 2</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $18.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="im24.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special food 3</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $20.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="im13.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Experiences1</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $25.79</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="im33.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Experiences1</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $25.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="im14.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Experiences 2</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $22.79</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="im23.webp" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Experiences 3</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $24.79</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="im30.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Rooms 3</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $10.79</h5>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" >
							<img class="img-fluid" src="im2.webp" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" ">
							<img class="img-fluid" src="im4.webp" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" >
							<img class="img-fluid" src="im25.webp" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" >
							<img class="img-fluid" src="im6.webp" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox">
							<img class="img-fluid" src="im7.webp" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" >
							<img class="img-fluid" src="im8.webp" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" >
							<img class="img-fluid" src="im31.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" >
							<img class="img-fluid" src="im30.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>teams</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="im29.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">jouhayna koubichate</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3"></p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="im27.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">mohamed zirari</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3"></p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="im26.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">walid koubichate</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3"></p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+212 0671658274
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							koubichatejouhayna@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							zagora 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Discover a desert oasis at our guest house in Zagora, Morocco. Immerse yourself in the charm of the Sahara with traditional accommodations, modern comforts, and panoramic dune views. Experience warm hospitality in the heart of the desert – your gateway to an authentic Moroccan adventure.</p>
				</div>
				
				
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name"> &copy; 2023 <a href="#">DAR TODA GUEST HOUSE</a> 
					
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="jquery-3.2.1.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="jquery.superslides.min.js"></script>
	<script src="images-loded.min.js"></script>
	<script src="isotope.min.js"></script>
	<script src="baguetteBox.min.js"></script>
	<script src="form-validator.min.js"></script>
    <script src="contact-form-script.js"></script>
    <script src="custom.js"></script>
</body>
</html>