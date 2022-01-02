<?php 
$file= 'randomNumbers.txt';

$nums=rand(1,50);
for($i=0;$i<49;$i++){
    $nums.= ' ';
    $nums.= rand(1,50);
}
file_put_contents($file, $nums);

$myfile = file_get_contents($file);
$numArray =  explode(" ", $myfile);

echo "<b>Contents of the file are : </b>";
foreach($numArray as $v){
    echo $v." ";
}

echo "<br>";echo "<br>";
echo "<b>Reading 15 numbers from file : </b>";
for($i=0;$i<15;$i++){
    echo $numArray[$i]." ";
    intval($numArray[$i]);
}
echo "<hr>";
?>

<?php
function getOdd(&$numArray)
{
	foreach ($numArray as $i) {
		$count=0;
		foreach($numArray as $j){
			if($i==$j){
				$count=$count+1;
			}
		}
		$ans =$count % 2;
		if($ans !=0){
			echo $i." ";
		}
	  }
}

function getEven(&$numArray)
{
	foreach ($numArray as $i) {
		$count=0;
		foreach($numArray as $j){
			if($i==$j){
				$count=$count+1;
			}
		}
		$ans =$count % 2;
		if($ans ==0){
			echo $i." ";
		}
	}
}
$n = sizeof($numArray);
echo "<b>Odd Occurrances are = </b>";
echo(getOdd($numArray));

echo "<br><br>";

echo "<b>Even Occurrances are = </b>";
echo(getEven($numArray));
?>
