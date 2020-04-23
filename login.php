<?php 
include 'scripts/cuslogin.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BHENT PS Booking System | Login Page</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/media.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="mynav">
		<div id="clogo">
			<h4>Broad Horizons</h4>
		</div>

		<ul class="cnav-links">
			<li><a href="index.php">Register</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
		<div id="cburger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div><!--/#burger/-->
	</nav>
	<div class="overlay"></div>
	<div id="holder">
		<div class="welcoming">
			<h4 class="welcoming-text">
				Welcome To Broad Horizons Playstation Booking System
			</h4>
		</div><!--/.welcoming/-->
		<div class="register">
			<div class="form-top">
				<h5>Login</h5>
				
			</div><!--/.form-top/-->
			<form action="login.php" class="login-form" method="POST">
				
				<div class="form-group">
					<label for="phone">Phone:</label>
					<input type="number" class="form-control" placeholder="Your Phone Number..." name="credone" id="namba" required>
				</div>
				<div class="form-group">
					<label for="pass1">Password:</label>
					<input type="password" class="form-control" placeholder="Your Password..." name="credtwo" id="siri" required>
				</div>
				
				<button type="submit" name="ingia" class="btn btn-warning">Login</button>
				<p>Not Yet Registered? <a target="_blank" id="register" href="index.php">Click Here.</a> </p>
			</form>
		</div><!--/.register/-->
	</div><!--/#holder/-->
	<footer id="foot">
		<p>&copy; Broad Horizons Ent <script>
			let date = new Date;
			let yr = date.getFullYear();
			document.write(yr);
		</script></p>
	</footer>
	<script src="assets/js/app.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>