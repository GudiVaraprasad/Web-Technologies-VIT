<?php
session_start();
include "19BCE7048_connection.php";
?>

<?php
  $userid=$_GET["userid"];
  $password=$_GET["password"]; ?>

    <h1 style="color: #03203C;"> Welcome <u style="color: red;"><?php echo $userid; ?></u> !!</h1>

  <?php
  $query = "SELECT * FROM stddata where userid = '$userid' AND password= '$password'";
  $connvar=mysqli_query($link, $query);
  $count=mysqli_num_rows($connvar);
?>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>19BCE7048 - Task 2</title> 
    </head>

	<body align="center">
        <h1 align ="center" style="color: #03203C;">Student Details</h1>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
        <td>Roll No.</td>
        <td>Student Name </td>
        <td>Email </td>
        <td>User ID </td>
        <td>Mobile Number </td>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($connvar)):
        ?>
        <tr>
        	<td><?php echo $row['rollno']; ?></td>
            <td><?php echo $row['sname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['userid']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
        </tr>
        <?php endwhile; ?>
        </tbody>
        </table>
	</body>
</html>