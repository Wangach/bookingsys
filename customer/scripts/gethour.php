<?php 
include '../../scripts/checksession.php';


if (isset($_GET['hourid']) && !empty($_GET['hourid'])) {
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
	
	return $selectedHour;
}elseif (empty($_GET['hourid'])) {
	echo "You Are Not Allowed To View This Page. Kindly follow the booking procedure!";
}

 ?>