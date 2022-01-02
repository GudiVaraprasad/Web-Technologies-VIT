<?php 
include "19BCE7048_connection.php";
?>

<html>
<title>19BCE7048 - LOGIN</title>
<link rel="stylesheet" href="style.css">
  <body>
    <div class="empData">
       <center>
          <h1><u>ENTER YOUR DETAILS - LOGIN</u></h1>
    <form action="validate.php" method="POST">
        <table style="font-size: 1.2rem;" border="0" cellpadding="10" cellspacing="5">
            <tr align="left">
                <th>Email Id<span> *</span></th>
                <th>
                    <input name="email" id="email" type="email" autocomplete="off" required/>
                </th>
            </tr>
            <tr align="left">
                <th>Password<span> *</span></th>
                <th>
                    <input name="password" id="password" type="password" required/>
                </th>
            </tr>
        </table> <br>
        <center><button style="font-size: 1.1rem;" name="btn" type="submit" id="btn" class="btn3">Login</button></center>
    </form>
</div>
<div class="logindata">
     <center><h2>Use these test details to LOGIN</h2></center>
<table align="center" border="1" cellpadding="10" cellspacing="0">
            <tr style="color: #111; background-color:rgb(132, 219, 54);" align="center">
                <th>Email Id</th>
                <th>Password</th>
            </tr>
            <tr align="left">
                <th>gudi.varaprasad@gmail.com</th>
                <th>gudi123</th>
            </tr>
            <tr align="left">
                <th>ram@gmail.com</th>
                <th>ram123</th>
            </tr>
            <tr align="left">
                <th>root@yahoo.com</th>
                <th>toor</th>
            </tr>
            <tr align="left">
                <th>vitap@vit.ac.in</th>
                <th>test2021</th>
            </tr>
            <tr align="left">
                <th>chandu.d@gmail.com</th>
                <th>chandu123</th>
            </tr>
        </table>
</div>
  </body>
</html>