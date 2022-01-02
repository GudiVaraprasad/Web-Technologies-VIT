<?php 
    $conn=mysqli_connect('localhost','root','','compdb') or die("connection failed".mysqli_connect_error());

    $sql= "SELECT Compname FROM compinfo";

    $query = mysqli_query($conn,$sql);
    if($query)
    {
        while($row=mysqli_fetch_array($query)):
            echo $row['Compname']."<br>";
        endwhile;
    }
    else
    {
    echo "No data Found";
    }
?>