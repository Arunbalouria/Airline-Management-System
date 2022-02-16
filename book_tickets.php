<?php
session_start();
?>
<html>

<head>
	<title>
		View Available Flights
	</title>
	<style>
		input {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 7px 30px;
		}

		input[type=submit] {
			background-color: #030337;
			color: white;
			border-radius: 4px;
			padding: 7px 45px;
			margin: 0px 127px
		}

		input[type=date] {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 5.5px 44.5px;
		}

		select {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 6.5px 75.5px;
		}
	</style>
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet" <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
	<script src="https://kit.fontawesome.com/900e40cf10.js" crossorigin="anonymous"></script>


	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
	</script>
	

</head>

<body>
	<section id="login">
		<nav class="navbar navbar-expand-md navbar-dark">
			<a class="navbar-brand" href="">flyHigh</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="home_page.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about_us.html">About us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#footer">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout_handler.php"> Logout</a>
					</li>

				</ul>
			</div>
		</nav>
	</section>
	<form action="view_flights_form_handler.php" method="post">
		<h2>SEARCH FOR AVAILABLE FLIGHTS</h2>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">Enter the Origin</td>
				<td class="fix_table">Enter the Destination</td>
			</tr>
			<tr>
				<td class="fix_table">
					<input list="origins" name="origin" placeholder="From" required>
					<datalist id="origins">
						<option value="bangalore">
					</datalist>
					<!-- <input type="text" name="origin" placeholder="From" required> -->
				</td>
				<td class="fix_table">
					<input list="destinations" name="destination" placeholder="To" required>
					<datalist id="destinations">
						<option value="mumbai">
						<option value="mysore">
						<option value="mangalore">
						<option value="chennai">
						<option value="hyderabad">
					</datalist>
					<!-- <input type="text" name="destination" placeholder="To" required> -->
				</td>
			</tr>
		</table>
		<br>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">Enter the Departure Date</td>
				<td class="fix_table">Enter the No. of Passengers</td>
			</tr>
			<tr>
				<td class="fix_table"><input type="date" name="dep_date" min=<?php
																				$todays_date = date('Y-m-d');
																				echo $todays_date;
																				?> max=<?php
								$max_date = date_create(date('Y-m-d'));
								date_add($max_date, date_interval_create_from_date_string("90 days"));
								echo date_format($max_date, "Y-m-d");
								?> required></td>
				<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
			</tr>
		</table>
		<br>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">Enter the Class</td>
			</tr>
			<tr>
				<td class="fix_table">
					<select name="class">
						<option value="economy">Economy</option>
						<option value="business">Business</option>
					</select>
				</td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Search for Available Flights" name="Search">
	</form>
	<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
</body>

</html>