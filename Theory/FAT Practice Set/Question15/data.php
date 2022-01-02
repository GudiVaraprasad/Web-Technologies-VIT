<?php
	require_once 'conn.php';
	
	$data = array();
 	
	$query=mysqli_query($conn, "SELECT * FROM `member`") or die("Connection failed".mysqli_connect_error());
	
	while($fetch = mysqli_fetch_array($query)){
		$data[] = $fetch;
	}
	
	echo json_encode($data);

?>