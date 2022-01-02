<html style="zoom: 100%;">
<title>19BCE7048 - Task 1</title>
<link rel="stylesheet" href="style.css">

<?php
error_reporting(E_ERROR | E_PARSE);

$userFile = $_POST["myfile"];
$txtfile = fopen($userFile, "r") or die("Error opening text file!");

echo "<h2>Contents in the file : </h2>";
echo fread($txtfile,filesize($userFile));
echo "<hr>";
?>

<?php
echo "<h2>Frequency of each word : </h2>";
$freq=array();
$word = "";
$getFile = fopen($userFile, "r") or die("Error opening text file!");

if ($getFile === false)
{ 
  exit; 
}

while (false !== ($eachChar = fgetc($getFile)))
{ 
  if ($eachChar == ' ')
  { 
    $freq[$word]++; 
    $word = ""; 
  } 
  else
  { 
    $word .= $eachChar; 
  } 
}

echo '<pre>'; print_r($freq); echo '</pre>';
echo "<br>";
?>

<?php
$wordCount = str_word_count(file_get_contents($userFile));
echo "<b>Total words = </b>".$wordCount;
fclose($txtfile);
?>

</html>