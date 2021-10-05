<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body bgcolor="pink">
  <br>
    <form action="Request_output.php" method="REQUEST"> 
      First name: <input type="text" name="firstname"> 
      Last name: <input type="text" name="lastname"> <br><br>
      Gender: 
      Male: <input type="radio" name="gender" value="male">
      Female: <input type="radio" name="gender" value="female"><br><br>
      Enter Ur Quote here...:
      <textarea name="quote" id="quote" cols="30" rows="10"></textarea><br><br>
      Select a level of education:<br>
      <select id="education" value="edu" name="edu">
        <option value="College">College</option>
        <option value="school">School</option>
      </select> <br><br>

      Choose Ur hobbies: <br>
      <input type="checkbox" id="Travelling" name="check_list[]" value="Travelling">
      <label for="Travelling"> Travelling</label>
      <input type="checkbox" id="Painting" name="check_list[]" value="Painting">
      <label for="Painting"> Painting</label>
      <input type="checkbox" id="Reading" name="check_list[]" value="Reading">
      <label for="Reading">Reading</label><br><br>
      
      <input type="submit" value="send data">
    </form>
</body>
</html>