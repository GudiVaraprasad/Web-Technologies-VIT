<?php 
    $conn=mysqli_connect('localhost','root','','userdb') or die("connection failed".mysqli_connect_error());

    $sql= "SELECT username FROM userinfo";

    $query = mysqli_query($conn,$sql);
    if($query)
    {
        while($row=mysqli_fetch_array($query)):
            echo $row['username']."<br>";
        endwhile;
    }
    else
    { 
        echo "No data Found";
    }
?>