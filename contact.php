<!DOCTYPE html>
<html lang="en">

<head>
	<title>Rental Bike</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Bike rental" content="Presentation website">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!--<iframe src="http://free.timeanddate.com/clock/i5fpvar2/n1446/tct/pct/ftb/tt0/tw0/tm1/ts1/tb4" frameborder="0" width="90" height="34" allowTransparency="true"></iframe>-->
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">



	<!--[if lt IE 9]>
			<script type="text/javascript">alert("Your browser does not support the canvas tag.");</script>
			<![endif]-->
	<script src="processing.js" type="text/javascript"></script>
	<script type="text/javascript">
		// convenience function to get the id attribute of generated sketch html element
		function getProcessingSketchId() {
			return 'sketch_grid';
		}
	</script>
</head>



<body>
	<nav id="navbar">
		<div id="logo">
			<img src="img/logo3.jpg" alt="rentalmoterbike.com">
		</div>
		<ul>
			<li class="item"><a href="index.php"><strong>Home</strong></a></li>
			<li class="item"><a href="bike.html"><strong>bikes</strong></a></li>
			<li class="item"><a href="reservation.php"><strong>Reservation</strong></a></li>
			<li class="item"><a href="contact.php"><strong>Contact</strong></a></li>
			<li class="item"><a href="logout.php"><strong>logout</strong></a></li>

		</ul>
	</nav>
	<?php
	$insert=false;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$desc = $_POST['desc'];


		// Connecting to the Database
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "login";

		// Create a connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Die if connection was not successful
		if (!$conn) {
			die("Sorry we failed to connect: " . mysqli_connect_error());
		} else {
			// Submit these to a database
			// Sql query to be executed 
			$sql = "INSERT INTO `contactus` (`name`, `email`, `massage`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
			$result = mysqli_query($conn, $sql);
			$insert = true;
			if ($result) {
				echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
         	    <strong>Success!</strong> Your entry has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                </div>';
			} else {
				// echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                </div>';
			}
		}
	}


	?>

	<div class="container mt-3" style=" width: 600px; height: 500px;">
		<?php
			if($insert == true){
				echo "Thanks for contact us";
			}
		?>
		<h1>Contact us for your problem</h1>
		<form action="/Rental_Bike/contact.php" method="post">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>

			<div class="form-group">
				<label for="desc">Massage</label>
				<textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>



	<footer class="container-fluid" id="foot">

		<div class="col-sm-2">
		</div>
		<div class="col-sm-8 about">
			<div class="col-sm-4" id="siteMap">
				<h4><strong>Site map</strong></h4>
				<h5><a href="index.html">Home</a></h5>
				<h5><a href="bike.html">bike list</a></h5>
				<h5><a href="reservation.php">Book a bike</a></h5>
				<h5><a href="contact.php">Contact</a></h5>
			</div>
			<div class="col-sm-4 " id="brands">
				<h4><strong>Partners</strong></h4>
				<h5><a id="Honda" href="http://powersports.honda.com/" target="_blank">Honda</a></h5>
				<h5><a id="Kawasaki" href="https://www.kawasaki.com/" target="_blank">Kawasaki</a></h5>
				<h5><a id="Suzuki" href="http://www.suzuki-moto.com/" target="_blank">Suzuki</a></h5>
				<h5><a id="Yamaha" href="https://www.yamahamotorsports.com/motorcycle" target="_blank">Yamaha</a></h5>
				<h5><a id="Tvs" href="https://www.tvsmotor.com/" target="_blank">Tvs</a></h5>
				<h5><a id="Ktm" href="https://www.ktm.com/en-in.html" target="_blank">ktm</a></h5>
			</div>

			<div class="col-sm-4" id="contactInfo">
				<h4><strong>Rental Bikes</strong></h4>
				<h5><strong>Address:</strong> 20-250,</h5>
				<h5>Patna, Bihar</h5>
				<h5><strong>Business Hours:</strong> 10am-7pm Mon-Sat</h5>
				<h5>12pm-6pm Sun </h5>
				<h5><strong>E-mail:</strong> Rentalbikes@gmail.com</h5>
				<h5><strong>Phone:</strong> +919934864098</h5>

			</div>

			<div class="col-sm-4" id="socialRow">
				<h3>Connect</h3>
				<ul id="socialMedia">
					<li id="facebook">
						<a href="https://www.facebook.com"><img src="img/facebook1.png" alt="facebook logo"></a>
					</li>
					<li id="google">
						<a href="https://www.google.com"><img src="img/google1.png" alt="google logo"></a>
					</li>
					<li id="linkedin">
						<a href="https://www.linkedin.com"><img src="img/linkedin1.png" alt="linkedin logo"></a>
					</li>
					<li id="skype">
						<a href="https://www.skype.com"><img src="img/skype1.png" alt="skype logo"></a>
					</li>
					<li id="whatsapp">
						<a href="https://www.linkedin.com"><img src="img/whatsapp1.png" alt="whatsapp logo"></a>
					</li>
					<li id="twitter">
						<a href="https://www.twitter.com"><img src="img/twitter1.png" alt="twitter logo"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-2">
		</div>
		<div id="rights">
			<h5>Rental Bike &copy; 2020</h5>
		</div>
	</footer>


	<!-- script-->
	<!-- <script>
		function validateForm() {
			var name = document.getElementById('name').value;
			if (name == "") {
				document.querySelector('.status').innerHTML = "Name cannot be empty";
				return false;
			}
			var email = document.getElementById('email').value;
			if (email == "") {
				document.querySelector('.status').innerHTML = "Email cannot be empty";
				return false;
			} else {
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				if (!re.test(email)) {
					document.querySelector('.status').innerHTML = "Email format invalid";
					return false;
				}
			}
			var subject = document.getElementById('subject').value;
			if (subject == "") {
				document.querySelector('.status').innerHTML = "Subject cannot be empty";
				return false;
			}
			var message = document.getElementById('message').value;
			if (message == "") {
				document.querySelector('.status').innerHTML = "Message cannot be empty";
				return false;
			}
			document.querySelector('.status').innerHTML = "Sending...";
		}
	</script> -->



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




	<script type='text/javascript' src='animation.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
</body>

</html>