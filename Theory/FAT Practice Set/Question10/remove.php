<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMOVE PAGE</title>
</head>
<body>
    <hr>
    <h2>Delete Values</h2> <br>
    <form method="POST">
        Company Name : <input name="Compname" type="text" required> <br><br>
        Address : <input name="address" type="text" required> <br><br>
        <button type="submit" name="submit">Delete</button> <br><br>
    </form>
</body>
</html>

<?php 
    
    if(isset($_POST["submit"]))
    {
            $conn=mysqli_connect('localhost','root','','compdb') or die("connection failed".mysqli_connect_error());
            if(isset($_POST['Compname']) && isset($_POST['address']))
            {
                $Compname=$_POST['Compname'];
                $address=$_POST['address'];

                $sql= "DELETE FROM compinfo WHERE Compname='$Compname' AND address='$address'";

                $query = mysqli_query($conn,$sql);
                if($query)
                {
                    echo "Data deleted Sucessfully.";
                }
                else
                {
                echo "Failed to delete data.";
                }
            }
    }
?>