<?php
		
	// Connect to server and select database
    $conn = mysqli_connect("localhost","sudath","test123","db3_musicapi");


	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>
