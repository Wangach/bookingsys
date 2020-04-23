<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Broad Horizons Ent | PS Booking System</title>
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
				<h5>Kindly Register To Continue</h5>
				<div id="server-response"></div>
			</div><!--/.form-top/-->
			<form action="scripts/register.php" class="registration-form" method="POST">
				<div class="form-group">
					<label for="name">Name:</label>
					<div class="error-name">This Field Cannot Be Blank!</div><!--Error Classes-->
					<input type="text" class="form-control" placeholder="Your Name..." name="jina" id="cn" required>
				</div>
				<div class="form-group">
					<label for="phone">Phone:</label>
					<div class="error-phone">This Field Cannot Be Blank!</div><!--Error Classes-->
					<input type="number" class="form-control" placeholder="Your Phone Number..." name="simu" id="pn" required>
				</div>
				<div class="form-group">
					<label for="pass1">Password:</label>
					<div class="error-pass1">This Field Cannot Be Blank!</div><!--Error Classes-->
					<input type="password" class="form-control" placeholder="Your Password..." name="pass1" id="pw" required>
				</div>
				<div class="form-group">
					<label for="pass2">Repeat Password:</label>
					<div class="error-pass2">This Field Cannot Be Blank!</div><!--Error Classes-->
					<div class="error-repeatpass">Passwords Do Not Match!</div><!--Error Classes-->
					<input type="password" class="form-control" placeholder="Repeat Password..." name="pass2" id="pwr" required>
				</div>
				<button type="submit" class="btn btn-warning">Register</button>
				<p>Already Registered? <a target="_blank" id="login" href="login.php">Click Here.</a> </p>
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