<?php
	session_start();
	$user = $_SESSION['id'];
	include 'connect.php';
	$sql = "SELECT * FROM project_info";
	$records = mysqli_query($db,$sql);
	
	if(isset($_GET['recordId'])){
		$id = mysqli_real_escape_string($db,$_GET['recordId']);
		$sqldel = "DELETE FROM project_info WHERE projectID = {$id}";
		
		mysqli_query($db,$sqldel) or die(mysqli_error($db));
		
		header("Location: mainpage.php");
		exit();
	}
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
<br>

<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>Project Name</th>
		<th>Project Type</th>
		<th>Start Date</th>
		<th>Finish Date</th>
		<th>Tasks</th>
		<th>Delete Project</th>
	</tr>
<?php
	while($project=mysqli_fetch_assoc($records)){
		echo"<tr>";
		
		echo"<td>".$project['projectName']."</td>";
		echo"<td>".$project['projectType']."</td>";
		echo"<td>".$project['startDate']."</td>";
		echo"<td>".$project['finishDate']."</td>";
		echo"<td><form action='tasks.php'><button>Go To Task!</button></form></td>";
		echo"<td><a href='mainpage.php?recordId=".$project['projectID']."'><button>Delete Project</button></a></td>";
		echo"</tr>";
	}

?>
</table>
<br><br><br>

<form action="newproject.php">
	<button>New Project</button>
</form>
<br>
<form action="logout.php">
	<button>Logout</button>
</form>
</body>
</html>