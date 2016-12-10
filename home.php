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

<form action="login.php" method="POST">
	<input type="text" name="email" placeholder="Email"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<button type="submit">Login</button>
</form>
<?php
	if(isset($_SESSION['id'])){
		echo "Welcome ";
		echo $_SESSION['id'];
	} else{
		echo "You are not logged in";
	}
?>
<br><br><br>

<form action="signup.php" method="POST">
		<input type="text" name="email" placeholder="Email"><br>
		<input type="text" name="name" placeholder="Name"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<button type="submit">Sign Up</button>
</form>

<br><br><br>

<form action="logout.php">
	<button>Logout</button>
</form>
</body>
</html>