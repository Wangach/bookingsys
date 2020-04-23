<?php 
include 'db.php';
session_start();
$outp = '';

if (isset($_POST['ingia'])) {
	$namba = mysqli_real_escape_string($connect, $_POST['credone']);
	$passi = mysqli_real_escape_string($connect, $_POST['credtwo']);

	if (!empty($namba) && !empty($passi)) {
		$search = "SELECT * FROM users WHERE phone = '$namba' AND password = '$passi'";
		$find = mysqli_query($connect, $search);
		//If Such a match has been found
		if (mysqli_num_rows($find) > 0) {
			$_SESSION['islogged'] = $namba;
			//redirect to customer page
			header("Location: ../bookingsys/customer/index.php");
		}else{
			$outp = "<script>";
			$outp .= "alert('Wrong Phone or Password. Try Again!')";
			$outp .= "</script>";

			echo $outp;
		}
	}
}

 ?>