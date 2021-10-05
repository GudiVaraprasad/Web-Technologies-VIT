<?php
$fname=$_REQUEST['firstname'];
$lname=$_REQUEST['lastname'];
$gender=$_REQUEST['gender'];
$text=$_REQUEST['quote'];
$ed=$_REQUEST["edu"];   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Hello...,<b> <?php echo $fname;  echo $lname;?> </b> <br><br><br>
    you are a <b><?php echo $gender;?></b>, and your quote is ... <i> <?php echo $text;?></i>
    <br><br><br>
    you passed...<b> <?php echo $ed;?></b><br>
    your hobbies are: <br>
<?php
if(!empty($_REQUEST['check_list'])) {
    foreach($_REQUEST['check_list'] as $check) {
            echo " ".$check;
    }
}
?>
</p>
</body>
</html>