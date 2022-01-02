<!-- // Task 1 -->
<?php
$cookie_name = "user";
$cookie_value = "varaprasad.19bce7048@vitap.ac.in";
$cookie_time = 60*60*24*10;
setcookie($cookie_name, $cookie_value, time() + $cookie_time, "/"); 

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie named '" . $cookie_name . "' is set!<br>";
  echo "Cookie value before modification is: " . $_COOKIE[$cookie_name]."<br>";
  echo "Cookie will expire after : " . $cookie_time." seconds";
}
echo "<br><hr><br>";
?>