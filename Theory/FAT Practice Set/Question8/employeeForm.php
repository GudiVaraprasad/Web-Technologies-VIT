<!-- 
5. Create a webpage using PHP that consists of textboxes to read “empid,” “salary,” 
“eName,” and “address.” The webpage should consist of submit and reset buttons. 
The form should be directed to a php file to :
-->

<?php 
session_start();
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
    <?php $empidERROR=$salaryERROR=$eNameERROR=$addressERROR=""; ?>

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
        
    </body>
</html>
