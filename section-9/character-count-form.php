<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Character Count Form</title>
</head>
<body>
	<form action="character-count-process.php" method="post">
		<input type="text" name="sentence" placeholder="make an entry">
        Count Spaces<input type="radio" name="spaces" value="yes">
        Omit Spaces<input type="radio" name="spaces" value="no">
		<input type="submit" name="submit" value="Get character count">
	</form>
</body>
</html>