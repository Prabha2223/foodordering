<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "book";

$conn = mysqli_connect($server, $user, $pass, $database);

		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$date = $_REQUEST['date'];
		$time = $_REQUEST['time'];
		$people = $_REQUEST['people'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO booking VALUES ('$name',
			'$email','$phone','$date','$time','$people')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Table Booked!....</h3>";

		} else{
			echo " Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

