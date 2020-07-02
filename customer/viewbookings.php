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
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Joohn Kimani <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#"> <span class="glyphicon glyphicon-user"></span>  My Profile</a></li>
						<li><a href="#"> <span class="glyphicon glyphicon-pencil"></span>  My Bookings <span class="badge badge-info">
							
						</span></a></li>
						<li><a href="../scripts/cuslogin.php?logout=1"> <span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
	
    <header class="myheader">
        <div class="row">
            <div class="col-md-6">
                <h2 class="intro">Hello John Kimani</h2>
                <p class="after-intro">You Have A Total Of 2 Bookings</p>
            </div><!--/.end of column/-->
            <div class="col-md-6">
                <p>Please Click The Button Below to load Your Bookings</p>
                <button class="btn btn-success">Load Bookings</button>

                <div id="show-bookings">

                </div><!--/#show-bookings/-->
            </div><!--/.end of column/-->
        </div><!--/.row/-->
    </header><!--/.myheader/-->

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