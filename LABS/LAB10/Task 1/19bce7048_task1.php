<?php
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Student.csv"');
$data = array(
        '1,Gudi Varaprasad,19BCE7048,9.51',
        '2,Mohan,19BCD7321,9.24',
        '3,Sreeja,19BCN7062,8.87',
        '4,Priya,19BCE7117,7.66',
        '5,Karthik,19BCD7011,8.94',
        '6,Suraj,19BCE7469,9.01'
);

$fileopen = fopen('php://output', 'wb');
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fileopen, $val);
}
fclose($fileopen);
?>