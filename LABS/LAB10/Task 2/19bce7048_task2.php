<html style="zoom: 100%;">
<title>19BCE7048 - Task 2</title>
<link rel="stylesheet" href="style.css">

<?php
error_reporting(E_ERROR | E_PARSE);
echo "<h2>Contents in the file : (Before Updating)</h2>";

$infos = array();
$stdcsv = "Student.csv";
if (($flag = fopen($stdcsv, "r")) !== FALSE) {
    echo '<table border="1" align="center" cellpadding="10" cellspacing="0">
    <thead>';
    echo '<th>ID</th> <th>Name</th> <th>Reg No.</th> <th>CGPA</th>';
    echo '</thead>';
    while (($data = fgetcsv($flag, 0, ",")) !== FALSE) {
        echo '<tr>
            <td>' . $data[0] . '</td>
            <td>' . $data[1] . '</td>
            <td>' . $data[2] . '</td>
            <td>' . $data[3] . '</td>
        </tr>';
        $infos[] = $data[0] . ',' . $data[1] . ',' . $data[2] . ',' . $data[3];
    }
    echo '</tbody></table>';
    fclose($flag);
    echo "<hr>";
}
?>

<?php
$appendCol = array();
if (($tmpflag = fopen("Student.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($tmpflag, 1000, ",")) !== FALSE) {
       $data[] = 'SCOPE';
        $appendCol[] = $data;
    }
    fclose($tmpflag);
}

$tmpflag = fopen('Student.csv', 'w');

foreach ($appendCol as $line) {
   fputcsv($tmpflag, $line);
}

fclose($tmpflag);
?>

<?php
error_reporting(E_ERROR | E_PARSE);
echo "<h2>Contents in the file : (After Updating)</h2>";

$infos = array();
$stdcsv = "Student.csv";
if (($flag = fopen($stdcsv, "r")) !== FALSE) {
    echo '<table border="1" align="center" cellpadding="10" cellspacing="0">
    <thead>';
    echo '<th>ID</th> <th>Name</th> <th>Reg No.</th> <th>CGPA</th> <th>School</th>';
    echo '</thead>';
    while (($data = fgetcsv($flag, 0, ",")) !== FALSE) {
        echo '<tr>
            <td>' . $data[0] . '</td>
            <td>' . $data[1] . '</td>
            <td>' . $data[2] . '</td>
            <td>' . $data[3] . '</td>
            <td>' . $data[4] . '</td>
        </tr>';
        $infos[] = $data[0] . ',' . $data[1] . ',' . $data[2] . ',' .$data[3] . ',' . $data[4];
    }
    echo '</tbody></table>';
    fclose($flag);
    echo "<hr>";
}
?>
