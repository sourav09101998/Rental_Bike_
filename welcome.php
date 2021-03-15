<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- <title>PHP login system!</title> -->
  <title>Rental Bike</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rental bikes</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
  <meta name="Bike Heaven" content="Presentation website">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

  <script src="processing.js" type="text/javascript"></script>
  <script type="text/javascript">
    // convenience function to get the id attribute of generated sketch html element
    function getProcessingSketchId() {
      return 'sketch_grid';
    }
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Php Login System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>



      </ul>

      <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
          </li>
        </ul>
      </div>


    </div>
  </nav>
  <nav id="navbar">
    <div id="logo">
      <img src="img/logo3.jpg" alt="rentalmoterbike.com">
    </div>
    <ul>
      <li class="item">
        <a class="nav-link" href="/">Home</a>
      </li>

      <li class="item">
        <a class="nav-link" href="price.html">Price</a>
      </li>

      <li class="item">
        <a class="nav-link" href="reservation.php">Reservation</a>
      </li>

      <li class="item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>

      <!-- <li class="item">
                <a class="nav-link" href="clientlogin.php">Client</a>
            </li> -->
    </ul>
    <div class="navbar-collapse collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
        </li>
      </ul>
    </div>
  </nav>

  <section id="home">
    <h1 class="h-primary">Welcome<br>To<br>Bike Heaven<br>Quick and easy online <span>Rental</span> Bike platform!</h1>
    <a href="price.html" class="btn" role="button">Book Now</a>
  </section>


  <section id="services-container">
    <h1 class="h-primary cente">Our Services</h1>
    <div id="services">
      <div class="box">
        <img src="img/Sport Bike.jpg" alt="">
        <h2 class="h-secondary center">Sport Bike</h2>
        <p class="center">Sports bikes are the ones which most people use for short-distance or in the sporting event/racing. The distance ranges from 70 km to 200 km or so in a day. They feature a high-revving & smooth engine which makes the sports bikes sprint
          faster than other types of bikes.</p>
      </div>
      <div class="box">
        <img src="img/Tourist Bike.jpg" alt="">
        <h2 class="h-secondary center">Tourist Bike</h2>
        <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis
          nisi. sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt voluptas beatae facilis labore, omnis sint quae eum.</p>
      </div>
      <div class="box">
        <img src="img/Cruiser Bike.jpg" alt="">
        <h2 class="h-secondary center">Cruiser Bike</h2>
        <p class="center">Cruiser bikes are very fascinating bikes due to their unusual styling and stance. These bikes have a very big fan following in the western countries. Even the famous movie character, Ghostrider, uses the cruiser bike. However, in India,
          many of us have a concern about the city rideability and practicality of the bike. We think that anyone who is interested in long journeys and to explore new places should give the cruisers the first priority.</p>
      </div>
    </div>
  </section>

  <section id="client-section">
    <h1 class="h-primary center">Our Patners</h1>
    <div id="clients">
      <div class="client-item">
        <a href="https://www.yamaha.com"><img src="img/yamaha logo.png" alt="Our Patner"></a>
      </div>
      <div class="client-item">
        <a href="https://www.kawasaki.com"><img src="img/kawasaki-logo.png" alt="Our Patner"></a>
      </div>

      <div class="client-item">
        <a href="https://www.suzuki.com"><img src="img/suzuki logo.png" alt="Our Patner"></a>
      </div>
      <div class="client-item">
        <a href="https://www.honda.com"><img src="img/honda logo.png" alt="Our Patner"></a>
      </div>
      <div class="client-item">
        <a href="https://www.tvsmotor.com/"><img src="img/tvs.png" alt="Our Patner"></a>
      </div>
      <div class="client-item">
        <a href="https://www.ktm.com/en-in.html"><img src="img/Ktm logo.jpg" alt="Our Patner"></a>
      </div>
    </div>

  </section>



  <footer class="container-fluid" id="foot">

    <div class="col-sm-2">
    </div>
    <div class="col-sm-8 about">
      <div class="col-sm-4" id="siteMap">
        <h4><strong>Site map</strong></h4>
        <h5><a href="index.html">Home</a></h5>
        <h5><a href="price.html">Price list</a></h5>
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
        <h5><strong>Tel:</strong> +12345678</h5>

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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>