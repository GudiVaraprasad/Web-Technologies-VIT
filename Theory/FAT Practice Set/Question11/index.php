<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<body>
    <h2>Home Page</h2> <br>
    <form action="file.php" method="POST">
        Number 1 : <input name="num1" type="number" required> <br><br>
        Number 2 : <input name="num2" type="number" required> <br><br>
        Name : <input name="name" type="text" required> <br><br>
        Address : <input name="addr" type="text" required> <br><br>
        <button name="submit" type="submit">Submit</button>
        <button onclick="reset()" name="reset" type="reset">Reset</button>
    </form>

    <script>
        function reset()
        {
            document.getElementsByName("num1").value = '';
            document.getElementsByName("num2").value = '';
            document.getElementsByName("name").value = '';
            document.getElementsByName("addr").value = '';
        }
    </script>
</body>
</html>