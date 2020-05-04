<?php 
include 'cuslogin.php';
//Check Login Status
if (empty($_SESSION['islogged']) || !isset($_SESSION['islogged'])) {
	$outp = "<script>";
	$outp .= "alert('Log In First!')";
	$outp .= "</script>";

	echo $outp;
	header("Location: ../login.php");
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
}
 ?>