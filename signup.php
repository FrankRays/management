<?php
session_start();
include 'connect.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];

$sql = "INSERT INTO usr_info (email, name, password) 
VALUES ('$email', '$name', '$password')";

$result = mysqli_query($db, $sql);

header("Location: home.php");
?>