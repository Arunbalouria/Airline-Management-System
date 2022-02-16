<?php
session_start();
?>
<html>

<head>
	<title>
		Enter Travel/Ticket Details
	</title>
	<style>
		input {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 7px 10px;
		}

		input[type=number] {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 7px 0px;
		}

		input[type=submit] {
			background-color: #030337;
			color: white;
			border-radius: 4px;
			padding: 7px 45px;
			margin: 0px 500px
		}

		input[type=radio] {
			margin-right: 30px;
		}

		select {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 6.5px 15px;
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

				</ul>
			</div>
		</nav>
	</section>
	<?php
	$no_of_pass = $_SESSION['no_of_pass'];
	$class = $_SESSION['class'];
	$count = $_SESSION['count'];
	$flight_no = $_POST['select_flight'];
	$_SESSION['flight_no'] = $flight_no;
	//$pass_name=array();
	echo "<h2>ADD PASSENGERS DETAILS</h2>";
	echo "<form action=\"add_ticket_details_form_handler.php\" method=\"post\">";
	while ($count <= $no_of_pass) {
		echo "<p><strong>PASSENGER " . $count . "<strong></p>";
		echo "<table cellpadding=\"0\">";
		echo "<tr>";
		echo "<td class=\"fix_table_short\">Passenger's Name</td>";
		echo "<td class=\"fix_table_short\">Passenger's Age</td>";
		echo "<td class=\"fix_table_short\">Passenger's Gender</td>";
		echo "<td class=\"fix_table_short\">Passenger's Inflight Meal</td>";
		echo "<td class=\"fix_table_short\">Passenger's Frequent Flier ID (if applicable)</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_name[]\" required></td>";
		echo "<td class=\"fix_table_short\"><input type=\"number\" name=\"pass_age[]\" required></td>";
		echo "<td class=\"fix_table_short\">";
		echo "<select name=\"pass_gender[]\">";
		echo "<option value=\"male\">Male</option>";
		echo "<option value=\"female\">Female</option>";
		echo "<option value=\"other\">Other</option>";
		echo "</select>";
		echo "</td>";
		echo "<td class=\"fix_table_short\">";
		echo "<select name=\"pass_meal[]\">";
		echo "<option value=\"yes\">Yes</option>";
		echo "<option value=\"no\">No</option>";
		echo "</select>";
		echo "</td>";
		echo "<td class=\"fix_table_short\"><input type=\"text\" name=\"pass_ff_id[]\"></td>";
		echo "</tr>";
		echo "</table>";
		echo "<br><hr>";
		$count = $count + 1;
	}
	echo "<br><h2>ENTER TRAVEL DETAILS</h2>";
	echo "<table cellpadding=\"5\">";
	echo "<tr>";
	echo "<td class=\"fix_table_short\">Do you want access to our Premium Lounge?</td>";
	echo "<td class=\"fix_table_short\">Do you want to opt for Priority Checkin?</td>";
	echo "<td class=\"fix_table_short\">Do you want to purchase Travel Insurance?</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td class=\"fix_table\">";
	echo "Yes <input type='radio' name='lounge_access' value='yes' checked/> No <input type='radio' name='lounge_access' value='no'/>";
	echo "</td>";
	echo "<td class=\"fix_table\">";
	echo "Yes <input type='radio' name='priority_checkin' value='yes' checked/> No <input type='radio' name='priority_checkin' value='no'/>";
	echo "</td>";
	echo "<td class=\"fix_table\">";
	echo "Yes <input type='radio' name='insurance' value='yes' checked/> No <input type='radio' name='insurance' value='no'/>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "<br><br>";
	echo "<input type=\"submit\" value=\"Submit Travel/Ticket Details\" name=\"Submit\">";
	echo "</form>";
	?>
	<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
</body>

</html>