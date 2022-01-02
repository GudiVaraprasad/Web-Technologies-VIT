<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $name = $_POST['name'];
        $addr = $_POST['addr'];

        $num= $num1; $sum=0; $rem=0;  
        for ($i =0; $i<=strlen($num);$i++)  
        {  
            $rem=$num%10;  
            $sum = $sum + $rem;  
            $num=$num/10;  
        }  
        echo "Sum of digits is = $sum"."<br>";

        $num = $num2;  
        $revnum = 0;  
        while ($num > 1)  
        {  
            $rem = $num % 10;  
            $revnum = ($revnum * 10) + $rem;  
            $num = ($num / 10);   
        }  
        echo "Reversed number is = $revnum"."<br>";

        echo "Name in uppercase = ".strtoupper($name)."<br>";
        echo "Length of address = ".strlen($addr);
    }
    else {
        header('Location:index.php');
    }
?>