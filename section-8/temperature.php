<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Temperature Conversion</title>
</head>

<body>

<form action="temperature-form.php" method="post">
	<input type="number" name="temperature" placeholder="enter temperature">
    <input type="number" name="accuracy" placeholder="desired accuracy">
	&#8457;<input type="radio" name="degree" value="fahrenheit">
	&#8451;<input type="radio" name="degree" value="celsius">
	<input type="submit" name="submit" value="Convert">
</form>
</body> 
</html> 