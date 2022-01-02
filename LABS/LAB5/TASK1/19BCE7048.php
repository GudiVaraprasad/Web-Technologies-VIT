<html>
    <head>
    	<meta charset="utf-8">
        <link rel="icon" href="icon.ico" type="image/ico">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>19BCE7048 - Student Details</title>
    </head>

	<body align="center" style="margin-top:60px; font-size:24px; font-family: 'Noto Sans JP', sans-serif;">
        <h1 align ="center" style="color: #03203C;">Student Details</h1>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
        <td>Roll Number</td>
        <td>Student Name </td>
        <td>Total </td>
        <td>Percentage </td>
        <td>Result </td>
        </tr>
        </thead>
        <tbody>
        <?php
        $subject1 = $_POST['s1marks'];
        $subject2 = $_POST['s2marks'];
        $subject3 = $_POST['s3marks'];
        $maxMarks = 300;
        $total = $subject1 + $subject2 + $subject3;

        $percentage = ($total/$maxMarks) * 100;

        if($percentage >= 90){
            $result = "First Class";
        } 
        else if($percentage >= 80 && $percentage < 90){
            $result = "Second Class";
        } 
        else if($percentage >= 70 && $percentage < 80){
            $result = "Third Class";
        } 
        else if($percentage >= 50 && $percentage < 70){
            $result = "Fourth Class";
        }
        else {
            $result = "Failed";
        }
        ?>
        <tr>
        	<td><?php echo $_POST['rollno']; ?></td>
            <td><?php echo $_POST['sname']; ?></td>
            <td><?php echo $total ?></td>
            <td><?php echo $percentage ?></td>
            <td><?php echo $result ?></td>
        </tr>
        </tbody>
        </table>
	</body>
</html>