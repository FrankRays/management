<?php
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1> New Project </h1>

<form action="applynewproject.php" method="POST">
		<input type="text" name="projectName" placeholder="Project Name"><br>
		<input type="text" name="projectType" placeholder="Project Type"><br>
		<p>Start Date</p>
		<input type="date" name="startDate" placeholder="Start Date"><br>
		<p>End Date</p>
		<input type="date" name="finishDate" placeholder="Finish Date"><br>
		<button type="submit">Submit!</button>
		<button action="mainpage.php">Cancel</button>
</form>

</body>
</html>