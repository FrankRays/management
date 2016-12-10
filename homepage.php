<?php
	session_start();
	$user = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1> Mainpage </h1>
<h2>Hello <?php echo $_SESSION['id'] ?>!</h2>

<br><br><br>

<form action="logout.php">
	<button>Logout</button>
</form>
</body>
</html>