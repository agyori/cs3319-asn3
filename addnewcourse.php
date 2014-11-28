<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Course Added!</title>
</head>
<body>
<?php
        include 'connectdb.php'
?>

<?php
   $cname = $_POST["cname"];
   $cnum = $_POST["cnum"];

   $query = 'insert into COURSE (coursename, coursenumber) values ("' . $cname . '","' . $cnum . '")';
   if (!mysqli_query($connection, $query)) {
      die("Error: insert failed" . mysqli_error($connection));
   }
   else {
      echo "Course was added!";
   }
   mysqli_close($connection);
?>
<!-- Hyperlink to take back to main menu. -->
<p>
<br>
<a href="gradsec.php">Back to Main Menu</a>
</body>
</html>
