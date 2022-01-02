<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGE PAGE</title>
</head>
<body>
    <h2>Change Password</h2> <br>
    <form method="POST">
        Username : <input name="uname" type="text" required> <br><br>
        Old Password : <input name="oldpass" type="text" required> <br><br>
        New Password : <input name="newpass" type="text" required> <br><br>
        <button type="submit" name="submit">Change</button> <br><br>
    </form>
</body>
</html>

<?php 
    
    if(isset($_POST["submit"]))
    {
            $conn=mysqli_connect('localhost','root','','userdb') or die("connection failed".mysqli_connect_error());
            if(isset($_POST['uname']) && isset($_POST['oldpass']) && isset($_POST['newpass']))
            {
                $uname=$_POST['uname'];
                $oldpass=$_POST['oldpass'];
                $newpass=$_POST['newpass'];

                $sql= "SELECT * FROM userinfo WHERE username='$uname' AND password='$oldpass'";
                $query = mysqli_query($conn,$sql);
                $row=mysqli_num_rows($query);

                if($row>0)
                {
                    $change = "UPDATE userinfo SET password = '$newpass' WHERE username='$uname' AND password='$oldpass'";
                    $query2 = mysqli_query($conn, $change);
                    echo "Password changed Successfully";
                }
                else
                { 
                    echo "incorrect details";
                }
            }
    }
?>