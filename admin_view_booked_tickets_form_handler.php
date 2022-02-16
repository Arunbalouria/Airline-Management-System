<?php
session_start();
?>
<html>

<head>
	<title>
		View Booked Tickets
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
			margin: 0px 390px
		}

		table {
			border-collapse: collapse;
		}

		tr

		/*:nth-child(3)*/
			{
			border: solid thin;
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
	<h2>LIST OF BOOKED TICKETS FOR THE FLIGHT</h2>
	<?php
	if (isset($_POST['Submit'])) {
		$data_missing = array();
		if (empty($_POST['flight_no'])) {
			$data_missing[] = 'Flight No.';
		} else {
			$flight_no = trim($_POST['flight_no']);
		}
		if (empty($_POST['departure_date'])) {
			$data_missing[] = 'Departure Date';
		} else {
			$departure_date = $_POST['departure_date'];
		}

		if (empty($data_missing)) {
			require_once('Database Connection file/mysqli_connect.php');
			$query = "SELECT pnr,date_of_reservation,class,no_of_passengers,payment_id,customer_id FROM Ticket_Details where flight_no=? and journey_date=? and booking_status='CONFIRMED' ORDER BY class";
			$stmt = mysqli_prepare($dbc, $query);
			mysqli_stmt_bind_param($stmt, "ss", $flight_no, $departure_date);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $pnr, $date_of_reservation, $class, $no_of_passengers, $payment_id, $customer_id);
			mysqli_stmt_store_result($stmt);
			if (mysqli_stmt_num_rows($stmt) == 0) {
				echo "<h3>No booked tickets information is available!</h3>";
			} else {
				echo "<table cellpadding=\"10\"";
				echo "<tr><th>PNR</th>
						<th>Date of Reservation</th>
						<th>Class</th>
						<th>No. of Passengers</th>
						<th>Payment ID</th>
						<th>Customer ID</th>
						</tr>";
				while (mysqli_stmt_fetch($stmt)) {
					echo "<tr>
							<td>" . $pnr . "</td>
							<td>" . $date_of_reservation . "</td>
							<td>" . $class . "</td>
							<td>" . $no_of_passengers . "</td>
							<td>" . $payment_id . "</td>
							<td>" . $customer_id . "</td>
        					</tr>";
				}
				echo "</table> <br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
			// else
			// {
			// 	echo "Submit Error";
			// 	echo mysqli_error();
			// }
		} else {
			echo "The following data fields were empty! <br>";
			foreach ($data_missing as $missing) {
				echo $missing . "<br>";
			}
		}
	} else {
		echo "Submit request not received";
	}
	?>
</body>

</html>