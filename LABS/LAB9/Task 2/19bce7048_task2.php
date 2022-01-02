<html style="zoom: 100%;">
<title>19BCE7048 - Task 2</title>
<link rel="stylesheet" href="style.css">

<?php
error_reporting(E_ERROR | E_PARSE);

$userFile = $_POST["myfile"];
$txtfile = fopen($userFile, "r") or die("Error opening text file!");

echo "<h2>Contents in the file : </h2>";
echo fread($txtfile,filesize($userFile));
fclose($txtfile);
echo "<hr>";
?>

<?php
    $myfile = fopen($userFile, "r") or die("Unable to open file!");
    $string= fread($myfile, filesize($userFile));
    $words=explode(" ", $string);
    $filtered_words=array();

    foreach($words as $w)
    {
        if(!preg_match("/{.*}/",$w))
        {
            array_push($filtered_words,$w);
         }
    }

    $output=array();

    foreach(range(0,count($filtered_words)-2) as $i)
    {
        array_push($output,$filtered_words[$i] . " - " . $filtered_words[$i+1]);
    }

    echo "The frequency of overlapping Bi-grams are = ".sizeof($output);
    echo "<br>";
    echo '<pre>'; print_r($output); echo '</pre>';
    echo "<hr>";
?>