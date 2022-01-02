<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$conn=mysqli_connect('localhost','root','','test2') or die("connection failed".mysqli_connect_error());

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phoneno']) && isset($_POST['bloodg']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phoneno=$_POST['phoneno'];
		$bloodg=$_POST['bloodg'];

		// $sql= "INSERT INTO 'users'('name','email,'phoneno','bloodg') VALUES ('$name','$email','$phoneno','$bloodg')";
		// $sql = "INSERT INTO users (name, email, phoneno, bloodg) VALUES ('$name', '$email', '$phoneno', '$bloodg')";
		$sql = "ALTER table users rename to users2";

		$query = mysqli_query($conn,$sql);
		if($query)
		{
			echo "Entry Succesful";
		}
		else
		{
		echo "error";
	    }
	}
}
?>