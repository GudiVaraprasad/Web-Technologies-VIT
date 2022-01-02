<?php
   $file = fopen("company.txt", "r") or die("File not found!");
   $line = fgets($file);
   $arr = explode(" ",$line);
   $count = sizeof($arr);
   echo "Count of companies:$count <br>";
   sort($arr);
   $num=0;
   echo "<ul><li>";
   for ($i=0;$i<$count ; $i++)
   {
       echo $arr[$i];
       $num++;
       if($num%3==0)
       {
           echo "</li>";
           echo "<li>";
       }
       else
       {
           echo ", ";
       }
   }
   echo "</ul>";
   fclose($file);
?>