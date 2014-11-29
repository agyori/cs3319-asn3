<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<title>Teaching Assistant</title>
</head>
<body>
<?php
	include 'connectdb.php';
	$whichta=$_POST['ta'];
	include 'gettacourses.php';
?>
<?php
	mysqli_close($connection);
?>
</body>
</html>

