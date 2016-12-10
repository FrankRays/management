<?php
	session_start();
	include 'connect.php';
	//echo (new \DateTime())->format('Y-m-d H:i:s');
	$projectname =  $_POST['projectName'];
	$projecttype =  $_POST['projectType'];
	$startdate =  $_POST['startDate'];
	$enddate =  $_POST['finishDate'];
	
	$sql = "INSERT INTO project_info (projectName, projectType, startDate, finishDate) 
	VALUES ('$projectname', '$projecttype', '$startdate', '$enddate')";
	
	$result = mysqli_query($db, $sql);
	
	if($result){
		header("Location: mainpage.php");
	} else {
		header("Location: newproject.php");
	}
	
	
	
?>