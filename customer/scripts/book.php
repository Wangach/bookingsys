<?php 
include 'database.php';
$display = '';

$searchTime = mysqli_real_escape_string($connect, $_POST['tme']);
$sql = "SELECT * FROM consoles WHERE pshours = '$searchTime'";
$exec = mysqli_query($connect, $sql);

if (mysqli_num_rows($exec) > 0) {
	while ($row = mysqli_fetch_assoc($exec)) {
		$nameOfPs = $row['psname'];
		$hourAvailable = $row['pshours'];
		$consoleId = $row['id'];

		if ($nameOfPs == 'Blessed') {
			$psDisplayName = 'PS4#1';
		}else if($nameOfPs == 'Favored'){
			$psDisplayName = 'PS4#2';
		}

		$display = "<table class='table table-bordered' id='beautify'>"; 
		$display .= "<tbody>";
		$display .= "<tr>
						<th>PS Id</th>
						<th>Time Of Day</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>$psDisplayName</td>
						<td>$hourAvailable</td>
						<td><a href='../customer/booked.php?hourid=$consoleId' target='_blank'><button class='btn btn-warning'>Book Now</button></a></td>
					</tr>";
		$display .= "</tbody>";
		$display .= "</table>";

		echo $display;
	}
}else{
	echo "No Data Found";
}

	
 ?>