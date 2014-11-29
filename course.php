<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Professor</title>
</head>
<?php
include 'connectdb.php';
?>
<?php
	$query = 'select * from TAAssignedTO join TEACHINGASSISTANT where TAAssignedTO.tauserid = TEACHINGASSISTANT.userid AND TAAssignedTO.coursenumber = "'. $_POST["course"] .'"';
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("databases query failed.");
	}
?>
<body>
<div align="center">
	<h1><?php echo $_POST["course"] ?></h1>
</div>
<div>
<?php
	$row = mysqli_fetch_assoc($result);
	echo 'Number of students : '. $row["numofstudents"] .'</br>';
	echo 'Teaching Assistants: </br>';
	echo $row["firstname"] .' '. $row["lastname"];
?>
</body>
</html>
