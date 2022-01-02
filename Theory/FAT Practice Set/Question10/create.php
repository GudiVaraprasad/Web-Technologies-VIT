<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE PAGE</title>
</head>
<body>
    <h2>Insert Values</h2> <br>
    <form method="POST">
        Company Name : <input name="Compname" type="text" required> <br><br>
        Product : <input name="product" type="text" required> <br><br>
        Price : <input name="price" type="number" required> <br><br>
        Address : <input name="address" type="text" required> <br><br>
        <button type="submit" name="submit">Insert</button> <br><br>
    </form>
</body>
</html>

<?php 
	if(isset($_POST["submit"]))
    {
        $conn=mysqli_connect('localhost','root','','compdb') or die("connection failed".mysqli_connect_error());

        if(isset($_POST['Compname']) && isset($_POST['product']) && isset($_POST['price']) && isset($_POST['address']))
        {
            $Compname=$_POST['Compname'];
            $product=$_POST['product'];
            $price=$_POST['price'];
            $address=$_POST['address'];

            $sql = "INSERT INTO compinfo (Compname, product, price, address) VALUES ('$Compname','$product','$price','$address')";

            $query = mysqli_query($conn, $sql);
            if($query)
            {
                echo "Data inserted Sucessfully.";
            }
            else
            {
            echo "Failed to Insert data.";
            }
        }
    }
?>