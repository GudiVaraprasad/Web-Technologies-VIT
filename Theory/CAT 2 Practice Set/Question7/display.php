<head>
    <style>
        html {
            zoom: 150%;
        }
    </style>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $nat = $_POST['nat'];

    echo "<h1>Using POST VARIABLE</h1> <br>";
    echo "<u>Your Details are</u><br><br>";
    echo "Name : ".$fname." ".$lname."<br>";
    echo "Gender : ".$gender."<br>";
    echo "Place of Birth : ".$pob."<br>";
    echo "Nationality : ".$nat;
}
?>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $gender = $_GET['gender'];
    $pob = $_GET['pob'];
    $nat = $_GET['nat'];

    echo "<h1>Using GET VARIABLE</h1> <br>";
    echo "<u>Your Details are</u><br><br>";
    echo "Name : ".$fname." ".$lname."<br>";
    echo "Gender : ".$gender."<br>";
    echo "Place of Birth : ".$pob."<br>";
    echo "Nationality : ".$nat;
}
?>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $gender = $_REQUEST['gender'];
    $pob = $_REQUEST['pob'];
    $nat = $_REQUEST['nat'];

    echo "<h1>Using REQUEST VARIABLE</h1> <br>";
    echo "<u>Your Details are</u><br><br>";
    echo "Name : ".$fname." ".$lname."<br>";
    echo "Gender : ".$gender."<br>";
    echo "Place of Birth : ".$pob."<br>";
    echo "Nationality : ".$nat;
}
?>