<?php
include '../scripts/checksession.php';
$output = '';

if (isset($_GET['hourid'])) {
	$connect = mysqli_connect("localhost", "root", "", "bookingsys");
	$selectedHour = $_GET['hourid'];


	$tafuta = "SELECT * FROM consoles WHERE id = '$selectedHour'";
	$pata = mysqli_query($connect, $tafuta);
	//Check Whether Such a row exists
	if (mysqli_num_rows($pata) > 0) {
		while ($data = mysqli_fetch_assoc($pata)) {
			$hr = $data['id'];
			$nombre = $data['psname'];
			echo $nombre;
		}
	}
	$output = "<script>";
	$output .= "alert('$selectedHour')";
	$output .= "</script>";

	echo $output;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Broad Horizons Ent | PS Booking System</title>
	<link rel="stylesheet" href="../assets/css/customer.css">
	<link rel="stylesheet" href="../assets/css/custmedia.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="mynav">
		<div id="clogo">
			<h4>Broad Horizons</h4>
		</div>

		<ul class="cnav-links">
			<li><a class="book" href="index.php"> <span class="glyphicon glyphicon-home"></span>Home</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php echo $nombre; ?></a></li>
			<li><a href="../scripts/cuslogin.php?logout=1"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>
		<div id="cburger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div><!--/#burger/-->
	</nav>
	<div class="overlay"></div><!--/.overlay/-->
		<div id="bookings-form-top">
			<h2>Form</h2>
		</div>
		<form action="" id="bookings-form">
			<div class="form-group">
				<label for="you">Your Name:</label>
				<input type="text" class="form-control" placeholder="Your Name..." name="" id="">
			</div>
			<div class="form-group">
				<label for="opponent">Opponent Name:</label>
				<input type="text" class="form-control" placeholder="Opponent's Name..." name="" id="">
			</div>
			<div class="form-group">
				<label for="time">Chosen Time:</label>
				<input type="text" class="form-control" placeholder="Playing Time..." value="<?php echo $nombre; ?>">
			</div>
		</form>
	<footer id="foot">
		<p>&copy; Broad Horizons Ent <script>
			let date = new Date;
			let yr = date.getFullYear();
			document.write(yr);
		</script></p>
	</footer>
	
	<script src="js/book.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>