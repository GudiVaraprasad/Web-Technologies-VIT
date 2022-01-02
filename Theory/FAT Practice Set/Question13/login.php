<?php
    $conn = mysqli_connect("localhost", "root", "", "userdb")or die($mysqli_error($conn));
?>
<html>
  <head>
      <title>LOGIN PAGE</title>
  </head>
  <body> 
    <h2>LOGIN</h2> <br>
    <form method="POST">
        Username : <input name="uname" type="text" required> <br><br>
        Password : <input name="pass" type="text" required> <br><br>
          <input type="submit" class="submit" value="Login">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $uname=$_POST['uname'];
            $pass=$_POST['pass'];
            $query = "SELECT * FROM userinfo WHERE username='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
            $num = mysqli_num_rows($result);
            if ($num==0) {
              echo "Invalid Credentials";
            } else {
              echo "Login Successful";
            }
        }
      ?>
  </body>
</html>

