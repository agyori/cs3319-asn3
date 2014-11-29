<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Professor</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<!-- SEARCH STUDENTS -->
<form action="teachassist.php" method="post"
enctype="multipart/formdata">
</br>
<?php
	$whichprof=$_POST["instructors"];
	include 'getta.php';
?>
<input type="submit" value="Find Teaching Assistant">
</form>
<hr>
<!-- SEARCH STUDENTS -->
<form action="course.php" method="post"
enctype="multipart/formdata">
<?php
	include 'getcourse.php';
?>
<input type = "submit" value = "Find Course">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>
