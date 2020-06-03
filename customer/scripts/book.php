<?php 
$path =  $_SERVER["DOCUMENT_ROOT"];
include 'database.php';
include $path.'/bookingsys/scripts/checksession.php';



//Values To Feed THe Database

if (isset($_POST['spot'])) {
	$yourName = $user;
	$yourOpponent = mysqli_real_escape_string($connect, $_POST['playertwo']);
	$yourChosenTme = mysqli_real_escape_string($connect, $_POST['playtime']);
	$numberOfMatches = mysqli_real_escape_string($connect, $_POST['matchestoplay']);
	$yourPhone = $userPhone;
	$availId = $_SESSION['saa'];

	//Generate Order Number
	$random = ["1", "2", "3", "5", "6", "7", "8", "9", "0"];
	$holder = "";

	for ($i=0; $i < 6; $i++) {
		$val1 = rand(0, 9);
		$genVal = $random[$val1];
		$holder = $holder.$genVal;
	}

	//Send THis Values To The Database
	$send = "INSERT INTO orders (hplayer, aplayer, tme, matches, booker, phone, ordernum, availability_id) VALUES ($yourName', '$yourOpponent', '$yourChosenTme', '$numberOfMatches', '$yourName', '$yourPhone', '$holder', '$availId')";
	$confirm = mysqli_query($connect, $send);

	if (!$confirm) {
		#There Has Been An Error
		echo "Sorry! The Following Error Has Occured ".mysqli_error($connect) . "!";
	}else{
		echo "Thankyou For Booking With Us. A confirmation Text Will Be Sent To The Provided Phone Number Once The Admin Confirms Your Order. Your Order Number Is ".$holder;
	}

}
 ?>
