<?php 
include "19BCE7048_connection.php";
?>

<html style="zoom: 140%;"> 
<link rel="stylesheet" href="style.css">
  <body>
    <div class="empData">
       <center>
          <h1><u>VIEW EMPLOYEE DATA</u></h1>
    <form action="getDetails.php" method="POST">
        <table border="0" cellpadding="10" cellspacing="5">
            <tr align="left">
                <th>Enter Table Name<span> *</span></th>
                <th>
                    <input name="tablename" id="tablename" type="text" required autocomplete="off"/>
                </th>
                <th>
                <button name="btn" type="submit" id="btn" class="btn3">Get Details</button>
                </th>
            </tr>
        </table>
    </form>
</div>
  </body>
</html>

<?php
if(isset($_POST['btn'])) {

$tablename = $_POST['tablename'];
$sql = "SELECT * from $tablename";
$connvar=mysqli_query($link, $sql);
$count=mysqli_num_rows($connvar);

    ?>
    <html>
	<body>
    <br>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
        <td>Employee Number</td>
        <td>Employee Name </td>
        <td>DOB </td>
        <td>DOJ </td>
        <td>Designation </td>
        <td>Department </td>
        <td>Salary </td>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($connvar)):
        ?>
        <tr>
        	<td><?php echo $row['empno']; ?></td>
            <td><?php echo $row['empname']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['doj']; ?></td>
            <td><?php echo $row['designation']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['salary']; ?></td>
        </tr>
        <?php endwhile; ?>
        </tbody>
        </table>
	</body>
</html>
    <?php
}
?>