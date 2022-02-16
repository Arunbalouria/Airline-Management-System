<?php
session_start();
?>
<html>

<head>
	<title>
		Add Flight Schedule Details
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
			margin: 0px 200px
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
	<form action="add_flight_details_form_handler.php" method="post">
		<h2>ENTER THE FLIGHT SCHEDULE DETAILS</h2>
		<?php
		if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
			echo "<strong style='color: green'>The Flight Schedule has been successfully added.</strong>
						<br>
						<br>";
		} else if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
			echo "<strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
						<br>
						<br>";
		}
		?>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">Flight Number</td>
			</tr>
			<tr>
				<td class="fix_table"><input type="text" name="flight_no" required></td>
			</tr>
		</table>
		<br>
		<hr>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">Origin</td>
				<td class="fix_table">Destination</td>
			</tr>
			<tr>
				<td class="fix_table"><input type="text" name="origin" required></td>
				<td class="fix_table"><input type="text" name="destination" required></td>
			</tr>
		</table>
		<br>
		<hr>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">Departure Date</td>
				<td class="fix_table">Arrival Date</td>
			</tr>
			<tr>
				<td class="fix_table"><input type="date" name="dep_date" required></td>
				<td class="fix_table"><input type="date" name="arr_date" required></td>
			</tr>
		</table>
		<br>
		<hr>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">Departure Time</td>
				<td class="fix_table">Arrival Time</td>
			</tr>
			<tr>
				<td class="fix_table"><input type="time" name="dep_time" required></td>
				<td class="fix_table"><input type="time" name="arr_time" required></td>
			</tr>
		</table>
		<br>
		<hr>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">Number of Seats in Economy Class</td>
				<td class="fix_table">Number of Seats in Business Class</td>
			</tr>
			<tr>
				<td class="fix_table"><input type="number" name="seats_eco" required></td>
				<td class="fix_table"><input type="number"" name=" seats_bus" required></td>
			</tr>
		</table>
		<br>
		<hr>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">Ticket Price(Economy Class)</td>
				<td class="fix_table">Ticket Price(Business Class)</td>
			</tr>
		</table>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">
					<input type="number" name="price_eco" required>
				</td>
				<td class="fix_table">
					<input type="number" name="price_bus" required>
				</td>
			</tr>
		</table>
		<br>
		<hr>
		<table cellpadding="5">
			<tr>
				<td class="fix_table">Jet ID</td>
			</tr>
			<tr>
				<td class="fix_table">
					<input type="text" name="jet_id" required>
				</td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Submit" name="Submit">
	</form>
	<!--check out addling local host in links and other places

		-->
</body>

</html>