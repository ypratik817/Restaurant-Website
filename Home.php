<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,
			initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="index.css">

	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		crossorigin="anonymous">

	<title>Restaurant Website.</title>
</head>

<body>

	<!-- navbar -->
	<nav>
		<ul class="nav-flex-row">
			<li class="nav-item">
				<a href="http://localhost/WEB%20DEV/Zeno.php#">Log In</a>
			</li>
			<li class="nav-item">
				<a href="#reservation">Categories</a>
			</li>
			<li class="nav-item">
				<a href="http://localhost/WEB%20DEV/Zeno1.php#">Contact Us</a>
			</li>
			<li class="nav-item">
				<a href="#shop">Shop</a>
			</li>
		</ul>
	</nav>
	<section class="section-intro">
		<header>
			<h1> Welcome To ZENO's</h1>
		</header>
		<div class="link-to-book-wrapper">
			<a class="link-to-book"
				href="#reservations">Book a table</a>
		</div>
	</section>

	<section class="about-section">
		<article>

			
<p>
Hey {{recipient_name}}, did you know that as coffee roasts gets darker, it loses the original flavor of the beans and take on more flavor from the roasting process?<br>

			</p>

		</article>
	</section>

	<!-- carousel section -->
	<div id="carouselExampleControls"
		class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/01.jpg"
					class="d-block w-100" alt="food">
			</div>
			<div class="carousel-item">
				<img src="images/02.jpg"
					class="d-block w-100" alt="food">
			</div>
			<div class="carousel-item">
				<img src="images/03.jpg"
					class="d-block w-100" alt="food">
			</div>
		</div>
		<a class="carousel-control-prev"
			href="#carouselExampleControls"
			role="button" data-slide="prev">
			<span class="carousel-control-prev-icon"
				aria-hidden="true">
			</span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next"
			href="#carouselExampleControls"
			role="button" data-slide="next">
			<span class="carousel-control-next-icon"
				aria-hidden="true">
			</span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="container">
		<div class="row-flex">
			<div class="flex-column-form">
				<h3>
					Make a booking
				</h3>
				<form class="media-centered">
					<div class="form-group">
						
<p>
							Please leave your number we will
							call to make a reservation
						</p>

						
						<input type="name" class="form-control"
							id="exampleInputName1"
							aria-describedby="nameHelp"
							placeholder="Enter your name">
					</div>
					<div class="form-group">
						<input type="number" class="form-control"
							id="exampleInputphoneNumber1"
							placeholder="Enter your phone number">
					</div>
					<button type="submit" class="btn btn-primary">
						Submit
					</button>
				</form>
			</div>
			<div class="opening-time">
				<h3>
					Opening times
				</h3>
				
<p>
					<span>Monday—Thursday: 08:00 — 22:00</span>
					<span>Friday—Saturday: 09:00 — 23:00 </span>
					<span>Sunday: 10:00 — 17:00</span>
					<h3><Address>Address</Address></h3>
					<span>Sector 4,Noida 400705</span>
				</p>

			</div>
			
		</div>
	</div>



	

	
</body>

</html>
