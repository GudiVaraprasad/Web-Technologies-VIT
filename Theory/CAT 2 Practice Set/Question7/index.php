<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSONAL INFORMATION</title>
</head>
<body>
    <h1>Enter your Personal Information</h1> <br>
    <form action="display.php" method="POST">
    <!-- <form action="display.php" method="GET"> -->
    <pre>
        First Name     : <input type="text" name="fname"> <br><br>
        Last Name      : <input type="text" name="lname"> <br><br>
        Gender         : <input type="radio" name="gender" id="Male" value="Male">Male
                         <input type="radio" name="gender" id="Female" value="Female">Female <br><br>
        Place of Birth : <input type="text" name="pob"> <br><br>
        Nationality    : <input type="text" name="nat"> <br><br>
        <button name="btn">Submit</button>
    </pre>
    </form>
</body>
</html>