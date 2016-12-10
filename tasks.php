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
<h1> New Task </h1>

<form action="applynewtask.php" method="POST">
		<input type="text" name="taskName" placeholder="Task Name"><br>
		<p>Start Date</p>
		<input type="date" name="taskStartDate" placeholder="Start Date"><br>
		<p>End Date</p>
		<input type="date" name="taskEndDate" placeholder="Finish Date"><br>
		<input type="checkbox" name="taskComplete" placeholder="Completed?"><br>
		<button type="submit">Submit!</button>
		<button action="mainpage.php">Cancel</button>
</form>

</body>
</html>