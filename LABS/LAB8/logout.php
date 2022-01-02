<?php 
include '19BCE7048_connection.php';
?>
<?php 
 if(isset($_POST["btn"]))  
 {
    session_unset();
    session_destroy();
    echo '<script language="javascript"> alert("Logged out successfully!"); 
    window.location.replace("login.php"); </script>';     
 }
?>

<?php
$testingvalue = "SESSION TEST";
$_SESSION['testing'] = $testingvalue;

$inactive = 120; // 2 minutes = 120 seconds
$_SESSION['expire'] = time() + $inactive;


if(time() > $_SESSION['expire'])
{  
    $_SESSION['testing'] = '';
 session_unset();
 session_destroy(); 
 $_SESSION['testing'] = '2 minutes expired';
}

echo '<script language="javascript"> alert("Logged out because of inactivity for more than 2 minutes!"); 
window.location.replace("login.php"); </script>';

?>