<?php
session_start();
include 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usr_info WHERE email='$email' AND password='$password' ";

$result = mysqli_query($db, $sql);

if(!$row = mysqli_fetch_assoc($result)){
	//echo "Your username or password is incorrect!";
	header("Location: faillogin.php");
} else {
	$_SESSION['id'] = $row['name'];
	header("Location: mainpage.php");
}

?>