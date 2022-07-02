<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "book";

$conn = mysqli_connect($server, $user, $pass, $database);

		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		$conduct = $_REQUEST['conduct'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO con VALUES ('$name',
			'$email','$$subject','$conduct')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Send Successfully!....</h3>";

		} else{
			echo " Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

