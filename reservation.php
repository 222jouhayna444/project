



<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Dar toda</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="style.css">    
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="classic.css">    
	<link rel="stylesheet" href="classic.date.css">    
	<link rel="stylesheet" href="classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .input-group-append {
            cursor: pointer;
        }
		#btn{
			center;
		}
    </style>
</head>

<body>
<?php

class Reservation
{
    public $id;
    public $roomNumber;
    public $clientName;
    public $roomPrice;
    public $checkInDate;
    public $checkOutDate;

    public function __construct($roomNumber, $clientName, $roomPrice, $checkInDate, $checkOutDate)
    {
        $this->roomNumber = $roomNumber;
        $this->clientName = $clientName;
        $this->roomPrice = $roomPrice;
        $this->checkInDate = $checkInDate;
        $this->checkOutDate = $checkOutDate;
    }

    public function saveReservation($conn)
    {
        $sql = "INSERT INTO reservations (room_number, client_name, room_price, check_in_date, check_out_date) 
                VALUES ('$this->roomNumber', '$this->clientName', '$this->roomPrice', '$this->checkInDate', '$this->checkOutDate')";

        if (mysqli_query($conn, $sql)) {
            echo "Reservation saved successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// Assuming you have a database connection
$server = "localhost";
$user = "root";
$password = "";
$dbName = "dartoda1";
$conn = new mysqli($server, $user, $password, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $roomNumber = $_POST['room_number'];
    $clientName = $_POST['client_name'];
    $roomPrice = $_POST['room_price'];
    $checkInDate = $_POST['check_in_date'];
    $checkOutDate = $_POST['check_out_date']; // Corrected field name

    // Create a new reservation
    $reservation = new Reservation($roomNumber, $clientName, $roomPrice, $checkInDate, $checkOutDate);

    // Save the reservation to the database
    $reservation->saveReservation($conn);

    // Close the database connection
    $conn->close();
}
?>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img class="im1" src="logo.webp" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
						<li class="nav-item active dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
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
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reservation</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<h2 class="text-center">Reservation Form</h2>
	<div>
    <form method="post" action="">
		<div class="col-12 col-md-8">
        <label for="client_name" class="fw-bold">Client Name:</label>
        <input class="form-control" type="text" name="client_name" required><br>
		</div>
       
			<div class="col-12 col-md-8">
            <label for="room_number" class="fw-bold">Room Number:</label>
            <input class="form-control" type="text" name="room_number" required><br>
            </div>
			<div class="col-12 col-md-8">
            <label for="room_price" class="fw-bold">Room Price:</label>
            <input class="form-control" type="text" name="room_price" required><br>
		    </div>
       

        <div class="input-group mb-3">
            <label for="check_in_date" class="fw-bold">Check-In Date:</label><br>
            <input class="form-control" type="date" name="check_in_date" required><br>

            <label for="check_out_date" class="fw-bold">Check-Out Date:</label><br>
            <input class="form-control" type="date" name="check_out_date" required><br> <!-- Corrected field name -->
        </div><br>
     <div class="text-center">
        <input id="btn"class="btn btn-primary btn-lg" type="submit" value="reserver">
		</div>
    </form>
	</div>
	<!-- End Reservation -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Teames</h2>
						
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
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="im26.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="im27.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
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
							+212 0613071023
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
	<script src="picker.js"></script>
	<script src="picker.date.js"></script>
	<script src="picker.time.js"></script>
	<script src="legacy.js"></script>
	<script src="form-validator.min.js"></script>
    <script src="contact-form-script.js"></script>
    <script src="custom.js"></script>
	<script>
        $(function(){
            $('#datepicker').datepicker();
        });
    </script>
</body>
</html>