<?php
	session_start();
	include 'connect.php';
	//echo (new \DateTime())->format('Y-m-d H:i:s');
	$taskname =  $_POST['taskName'];
	$taskstartdate =  $_POST['taskStartDate'];
	$taskenddate =  $_POST['taskEndDate'];
	$completed =  $_POST['taskComplete'];
	
	$sql = "INSERT INTO task_info (taskName, taskStartDate, taskEndDate, taskComplete) 
	VALUES ('$taskname', '$taskstartdate', '$taskenddate', '$completed')";
	
	$result = mysqli_query($db, $sql);
	
	if($result){
		header("Location: mainpage.php");
	} else {
		header("Location: tasks.php");
	}
	
	
	
?>