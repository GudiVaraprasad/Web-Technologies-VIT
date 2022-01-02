<?php
	$conn=mysqli_connect("localhost", "root", "", "angularsql");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>