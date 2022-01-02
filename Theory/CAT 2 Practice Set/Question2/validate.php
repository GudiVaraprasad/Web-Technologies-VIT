<!-- 
a. Check whether empid is proper or not (length of empid must be 8, 
the first four places of empid must be characters and the remaining are digits)
b. Salary must contain digits only and number of digits should be in the range (4-6).
c. eName must have characters only. The first character has to be capital letter.
-->

<?php
$empidERROR=$salaryERROR=$eNameERROR=$addressERROR="";
$addressMSG="";

$empid = $_POST['empid'];
$salary = $_POST['salary'];
$eName = $_POST['eName'];
$address = $_POST['address'];

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $is_char = preg_match('/^[a-zA-Z]+$/', $eName);
    $is_numeric = preg_match('/^[0-9]+$/', $salary);
    $is_alpha_numeric = preg_match('/^[a-zA-Z0-9]+$/', $empid);

if(empty($_POST['empid']))
{
    $empidERROR="This field is empty";
}
else
{
    if($is_alpha_numeric)
    {
        if(strlen($empid) == 8)
        {
            $empidArr1 = substr($empid,0,4);
            $empidArr2 = substr($empid,4,8);
            $checkChar = preg_match('/^[a-zA-Z]+$/', $empidArr1);
            $checkNum = preg_match('/^[0-9]+$/', $empidArr2);

            if($checkChar==1 && $checkNum==1)
            {
                $empidERROR="Passed";
            }
            else
            {
                $empidERROR="Characters and digits are in inappropriate places";
            }
        }
        else
        {
            $empidERROR="not 8 characters";
        }
    }
    else
    {
        $empidERROR="contains special characters"; 
    }
}

if(empty($_POST['salary']))
{
    $salaryERROR="This field is empty";
}
else
{
    if ($is_numeric) 
    {
        if(strlen($salary)>=4 && strlen($salary)<=6)
        {
            $salaryERROR='Passed';
        }
        else
        {
            $salaryERROR='No. of Digits is not between 4-6.';
        }
    }
    else
    {
        $salaryERROR='does not contain only numbers.';
    }
}

if(empty($_POST['eName']))
{
    $eNameERROR="This field is empty";
}
else
{
    if ($is_char) 
    {
        if(ctype_upper($eName[0]))
        {
            $eNameERROR='Passed';
        }
        else
        {
            $eNameERROR='First character is not Uppercase.';
        }
    }
    else
    {
        $eNameERROR='does not contain only characters.';
    }
}

if(empty($_POST['address']))
{
    $addressERROR="This field is empty";
}
else
{
    $addressERROR="Passed";
}

}
?>

<html>
    <head>
        <title>Form</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <style>
            .error {
                color:red;
            }
        </style>
    </head>
    <body>
        <h1><u>Employee Form</u></h1><br/>

        <form action="validate.php" method="POST">

            empid : <input type="text" name="empid" required/>
            <span class="error">* <?php echo $empidERROR;?> </span> <br><br>

            salary : <input type="number" name="salary" required/>
            <span class="error">* <?php echo $salaryERROR;?> </span> <br><br>

            eName : <input type="text" name="eName" required/>
            <span class="error">* <?php echo $eNameERROR;?> </span> <br><br>

            address : <input type="text" name="address" required/>
            <span class="error">* <?php echo $addressERROR;?> </span> <br><br>

            <input type="submit" value="Submit" />
            <input type="reset" value="Reset" />
        </form>
        <br><hr><br>
    </body>
</html>