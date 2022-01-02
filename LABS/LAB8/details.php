<?php 
include '19BCE7048_connection.php';
?>

<html lang="en" style="zoom: 150%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19BCE7048 - DETAILS</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
<h1>Welcome <span style="color: rgb(201, 0, 60);"><?php 
$name =$_SESSION['name'];
$email =$_SESSION['email'];
echo $name;
$sql = "SELECT * FROM mydetails where email = '$email'";
$connvar=mysqli_query($link, $sql);
?></span>
</h1></center>
    <br>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
        <td>Roll No.</td>
        <td>Name</td>
        <td>DOB</td>
        <td>Branch</td>
        <td>Year</td>
        <td>Email Id</td>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($connvar)):
        ?>
        <tr>
        	<td><?php echo $row['regno']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['year']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <?php endwhile; ?>
        </tbody>
        </table> <br>
        <form action="logout.php" method="POST">
        <center>
            <input name="btn" type="submit" id="btn" class="btn2" value="Logout">
        </center>
        </form>
</body>
</html>