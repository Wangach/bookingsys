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
			$playTime = $data['pshours'];
			$bookStat = $data['bookstatus'];
		}
	}
	
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
			<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php echo $user; ?></a></li>
			<li><a href="../scripts/cuslogin.php?logout=1"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>
		<div id="cburger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div><!--/#burger/-->
	</nav>
	<div class="overlay"></div><!--/.overlay/-->
		<div id="book-step">
			<div id="bookings-form-top">
				<h2>Book Playstation</h2>
			</div>
			<form action="scripts/book.php" id="bookings-form" method="POST">
				<div class="form-group">
					<label for="you">Your Name:</label>
					<input type="text" class="form-control" placeholder="Your Name..." value="<?php echo $user; ?>" name="playerone" id="yn" disabled>
				</div>
				<div class="form-group">
					<label for="opponent">Opponent Name:</label>
					<input type="text" class="form-control" placeholder="Opponent's Name..." name="playertwo" id="on" required>
				</div>
				<div class="form-group">
					<label for="time">Chosen Time:</label>
					<input type="text" class="form-control" placeholder="Playing Time..." value="<?php echo $playTime; ?>" name="playtime" id="top">
				</div>
				<div class="form-group">
					<label for="matches">No. Of Matches:</label>
					<select name="matchestoplay" id="nom" class="form-control" required>
						<option value=""></option>
						<option value="1" name="1">1</option>
						<option value="2" name="2">2</option>
						<option value="3" name="3">3</option>
						<option value="4" name="4">4</option>
						<option value="5" name="5">5</option>
						<option value="6" name="6">6</option>
						<option value="7" name="7">7</option>
					</select>
				</div>
				<div class="form-group">
					<label for="time">Phone Number:</label>
					<input type="text" class="form-control" placeholder="Your Phone Number..." value="<?php echo $userPhone; ?>" name="phoneno" id="pn" disabled>
				</div>
				<button type="submit" class="btn btn-success">Book Now</button>
			</form>
		</div><!--/#book-step/-->
	<footer id="foot">
		<p>&copy; Broad Horizons Ent <script>
			let date = new Date;
			let yr = date.getFullYear();
			document.write(yr);
		</script></p>
	</footer>
	
	<script src="../assets/bookps.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>