<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Professors</title>
</head>
<body>
<?php
        include 'connectdb.php';
?>
<h1>Professors</h1>
<form action = "professor.php" method ="post">
<br>
<?php
include 'getprof.php';
?>
<input type="submit" value="Find Prof">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>

