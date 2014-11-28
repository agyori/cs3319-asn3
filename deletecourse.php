<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Deleted Course!</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>

<?php
   $courseNum = $_POST["courseNum"];
   
   // Delete any entries in the TAAssignedTO that refer to this course
   $query = 'delete from TAAssignedTO where coursenumber="' . $courseNum . '"';
   if (!mysqli_query($connection, $query)) {
      die("Error: deletion from TAAssignedTO failed");
   }

   // Delete the course from the COURSE table.
   $query = 'delete from COURSE where coursenumber="' . $courseNum . '"';
   if (!mysqli_query($connection, $query)) {
      die("Error: deletion from COURSE failed");
   }
   echo "Course successfully deleted!";
?>
<!-- Hyperlink to take back to main menu. -->
<p>
<br>
<a href="gradsec.php">Back to Main Menu</a>
</p>
</body>
</html>
