<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Professor</title>
</head>
<body>
<form action="teachassist.php" method="post">
<?php
	include 'connectdb.php';
	$whichprof=$_POST["instructors"];
	include 'getta.php';
?>
<input type="submit" value="Find Teaching Assistant">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>
