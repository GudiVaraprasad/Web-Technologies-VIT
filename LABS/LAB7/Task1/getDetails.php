<?php 
include "19BCE7048_connection.php";
?>

<html style="zoom: 140%;">
<title>19BCE7048 - Task 1</title>
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
                    <input name="tablename" id="tablename" type="text" required/>
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

$tablename = $_POST['tablename']; // My table name is employee_modified_task1

$Query1b = "UPDATE $tablename SET designation = 'Professor', salary = salary + 20000 WHERE $tablename.`designation` = 'Associate Professor' AND abs(year(current_date)-year(doj)) > 5";
mysqli_query($link, $Query1b);

$Query1a = "UPDATE $tablename SET designation = 'Associate Professor', salary = salary + 50000 WHERE $tablename.`designation` = 'Assistant Professor' AND abs(year(current_date)-year(doj)) > 5";
mysqli_query($link, $Query1a);


$sql = "SELECT empno, empname, dob, doj, designation, department, abs(year(current_date)-year(doj)) as experience, salary FROM employee";
$connvar=mysqli_query($link, $sql);
$count=mysqli_num_rows($connvar);

$sql2 = "SELECT empno, empname, dob, doj, designation, department, abs(year(current_date)-year(doj)) as experience, salary FROM $tablename";
$connvar2=mysqli_query($link, $sql2);
$count2=mysqli_num_rows($connvar2);

    ?>
    <html>
	<body>
    <br>
    <h2 align="center">Actual Employee Table</h2>
    <br>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
        <td>Employee Number</td>
        <td>Employee Name </td>
        <td>DOB </td>
        <td>DOJ </td>
        <td>Current Designation </td>
        <td>Department </td>
        <td>Experience </td>
        <td>Salary</td>
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
            <td><?php echo $row['experience']; ?></td>
            <td><?php echo $row['salary']; ?></td>
        </tr>
        <?php endwhile; ?>
        </tbody>
        </table>
    <br>
    <h2 align="center">Employee Table after Norms</h2>
    <br>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
        <td>Employee Number</td>
        <td>Employee Name </td>
        <td>Updated Designation </td>
        <td>Experience </td>
        <td>Salary Change </td>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($connvar2)):
        ?>
        <tr>
        	<td><?php echo $row['empno']; ?></td>
            <td><?php echo $row['empname']; ?></td>
            <td><?php echo $row['designation']; ?></td>
            <td><?php echo $row['experience']; ?></td>
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