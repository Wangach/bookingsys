<?php 
include '../scripts/checksession.php';

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
	
	<nav class="navbar navbar-default navbar-light bg-primary" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Broad Horizons Ent</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a class="book" href="#" data-toggle="modal" data-target="#exampleModalCenter">
					<span class="glyphicon glyphicon-book"></span> Book PS</a>

				</li>
				<li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> Notifications <span class="badge badge-primary">0</span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $user; ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"> <span class="glyphicon glyphicon-user"></span>  My Profile</a></li>
						<li><a href="#"> <span class="glyphicon glyphicon-pencil"></span>  My Bookings <span class="badge badge-info">
							<?php include 'scripts/getindividualbookings.php'; ?>
						</span></a></li>
						<li><a href="../scripts/cuslogin.php?logout=1"> <span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
	
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
			      	<form action="scripts/searchps.php" id="book-form" method="POST">
			      		<div class="form-group">
			      			<label for="t">Time</label>
			      			<select name="tme" id="toplay" class="form-control">
			      				<option value=""></option>
			      				<option value="9 A.M.">9 A.M.</option>
			      				<option value="10 A.M.">10 A.M.</option>
			      				<option value="11 A.M.">11 A.M.</option>
			      				<option value="12 A.M.">12 Noon</option>
			      				<option value="1 P.M.">1 P.M.</option>
			      				<option value="2 P.M.">2 P.M.</option>
			      				<option value="3 P.M.">3 P.M.</option>
			      				<option value="4 P.M.">4 P.M.</option>
			      				<option value="5 P.M.">5 P.M.</option>
			      				<option value="6 P.M.">6 P.M.</option>
			      			</select>
			      		</div>
			      		
			      		<button type="submit" name="tafuta" id="conf" class="btn btn-info">Search PS</button>
			      	</form>
			      </div>
			      <div class="modal-footer">
			        <div id="results"></div>
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