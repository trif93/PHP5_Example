<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test form</title>
</head>
<body>
	<form name="test" action="check.php" method="post">
		<label >Name: </label><br>
		<input type="text" name="name" placeholder="Name"><br>
		<label >Email:</label><br>
		<input type="text" name="email"><br>
		<label >Message:</label><br>
		<textarea name="message" cols="30" rows="10"></textarea><br>
		<input type="submit" name="done" value="submit">
	</form>
</body>
</html>