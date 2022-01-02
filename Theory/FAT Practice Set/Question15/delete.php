<?php
	require_once 'conn.php';
	mysqli_query($conn, "DELETE FROM member order by mem_id desc limit 1") or die("Connection failed".mysqli_connect_error());
?>