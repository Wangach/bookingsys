<?php 
//include '../scripts/db.php';
include '../scripts/cuslogin.php';
//Check whether the user has logged in
if (empty($_SESSION['islogged']) || !isset($_SESSION['islogged'])) {
	$outp = "<script>";
	$outp .= "alert('Log In First!')";
	$outp .= "</script>";

	echo $outp;
	header("Location: ../index.php");
}else{
	$phon = $_SESSION['islogged'];
	$getuser = "SELECT * FROM users WHERE phone = '$phon'";
	$findus = mysqli_query($connect, $getuser);
	if (mysqli_num_rows($findus) > 0) {
		while ($row = mysqli_fetch_assoc($findus)) {
			$user = $row['name'];
			$change_st = "UPDATE users SET logged = '1' WHERE name = '$user'";
			$confirm = mysqli_query($connect, $change_st);
		}
	}
	//When The Logout Button Is Pressed 
	if (isset($_GET['logout'])) {
		$revert = "UPDATE users SET logged = '0' WHERE phone = '$phon'";
		$revconf = mysqli_query($connect, $revert);

		//Destroy session
		//session_destroy();
		unset($_SESSION['islogged']);
		header('Location: ../login.php');
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
			<li><a class="book" href="#" data-toggle="modal" data-target="#exampleModalCenter"> <span class="glyphicon glyphicon-book"></span>Book PS</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php echo $user; ?></a></li>
			<li><a href="index.php?logout=1"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>
		<div id="cburger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div><!--/#burger/-->
	</nav>
	<div class="overlay"></div><!--/.overlay/-->
		<div id="organize">

			<div class="new">
				<h4 class="div-header">Whats New.</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, quia libero fuga error vero illo officia enim maiores beatae laboriosam? Est expedita nostrum facere iste, eveniet laudantium fugit veniam sequi.
				</p>
			</div><!--/.new/-->
			<div class="qfacts">
				<h4 class="div-header">Quick Facts.</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. A molestias voluptatum error eveniet illo nostrum! Temporibus, perspiciatis at fuga corrupti quasi iste ullam rem magni, error, earum voluptatum quos dolores?
				</p>
			</div><!--/.qfacts/-->
			<div class="stats">
				<h4 class="div-header">Consoles Live Stats.</h4>
				<div id="consoles">
					<div class="console1">
						<h4>PS4 #1</h4>
						<div class="more-dets">
							<p class="status">
								Status: <span class="bfu"> Updating...</span>
							</p>
							<h5>Who's Playing</h5>
							<p class="player">
								<strong>Player One</strong> vs <strong>Player Two</strong>
							</p>
							<div class="gamesavail">
								<h5>Available Games</h5>
								<p>FIFA 20</p>
							</div><!--/.gamesavail/-->
						</div><!--/.more-dets-->
					</div><!--/.console1/-->
					<div class="console2">
						<h4>PS4 #2</h4>
						<div class="more-dets">
							<p class="status">
								Status: <span class="bfu"> Busy...</span>
							</p>
							<h5>Who's Playing</h5>
							<p class="player">
								<strong>Player One</strong> vs <strong>Player Two</strong>
							</p>
							<div class="gamesavail">
								<h5>Available Games</h5>
								<p>FIFA 20</p>
							</div><!--/.gamesavail/-->
						</div><!--/.more-dets/-->
					</div><!--/.console2/-->
				</div><!--/#consoles/-->
			</div><!--/.stats/-->

			<!--Book Ps Modal Pop up-->
			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Book Playstation Now</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form action="#" id="book-form" method="POST">
			      		<div class="form-group">
			      			<label for="t">PS4 Id</label>
			      			<select name="playstation" id="psid" class="form-control">
			      				<option value=""></option>
			      				<option value="Blessed">PS4#1</option>
			      				<option value="Favored">PS4#2</option>
			      			</select>
			      		</div>
			      		<div class="form-group">
			      			<label for="t">Time</label>
			      			<select name="tme" id="toplay" class="form-control" disabled>
			      				<option value=""></option>
			      				<option value="9">9 A.M.</option>
			      				<option value="10">10 A.M.</option>
			      				<option value="11">11 A.M.</option>
			      				<option value="12">12 Noon</option>
			      				<option value="1">1 P.M.</option>
			      				<option value="2">2 P.M.</option>
			      				<option value="3">3 P.M.</option>
			      				<option value="4">4 P.M.</option>
			      				<option value="5">5 P.M.</option>
			      				<option value="6">6 P.M.</option>
			      			</select>
			      		</div>
			      		<div class="form-group">
			      			<label for="p1">Player 1</label>
			      			<input type="text" class="form-control" placeholder="Your Name..." name="plone" id="yn">
			      		</div>
			      		<div class="form-group">
			      			<label for="p2">Player 2</label>
			      			<input type="text" class="form-control" placeholder="Your Opponent's Name..." name="pltwo" id="yon">
			      		</div>
			      		
			      		<div class="form-group">
			      			<label for="matches">Number Of Matches:</label>
			      			<select name="tme" id="toplay" class="form-control">
			      				<option value=""></option>
			      				<option value="1">One</option>
			      				<option value="2">Two</option>
			      				<option value="3">Three</option>
			      				<option value="4">Four</option>
			      				<option value="5">Five</option>
			      				<option value="sixplus">6+</option>
			      			</select>
			      		</div>
			      		<button id="conf" class="btn btn-danger">Confirm</button>
			      		<button name="book" id="book" class="btn btn-success">Book</button>
			      	</form>
			      </div>
			      <div class="modal-footer">
			        
			      </div>
			    </div>
			  </div>
			</div>


		</div><!--/#organize/-->
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