<!-- 2. Write a PHP program to compute the sum of the prime numbers less than 200 -->
<?php
$userArray = array();
$notPrime = false;
for ($i = 2; $i<200; $i++) {
    $notPrime = true;
		for ($j = 2; $j<=($i/2); $j++) {
			if ($i%$j==0) {
				$notPrime = false;
				break;
			}
		}
		if ($notPrime) {
			array_push($userArray,$i);
		}
		if (count($userArray)==200) {
			break;
		}
}
echo '<b>'."List of the prime numbers less than 200 : ".'</b>';
echo implode(", ", $userArray); echo '<br>'; echo '<br>';
echo "Sum of the prime numbers less than 200 = ";
echo '<b>'. array_sum($userArray) .'</b>'."\n";
?>