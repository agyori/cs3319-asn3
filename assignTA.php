<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assign TA to Course</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>

<?php
   // Get all the variables.
   $userID = $_POST["userID"];
   $courseNum = $_POST["courseNum"];
   $term = $_POST["term"];
   $year = (int)$_POST["year"];
   $numofstudents = (int)$_POST["numofstudents"];

   // Insert into the TAAssignedTO table
   $query = 'insert into TAAssignedTO values ("' . $courseNum . '","' . $userID . '","' . $year . '","' . $term . '","' . $numofstudents . '")';
   if (!mysqli_query($connection, $query)) {
      die("Error: insert failed");
   }
   echo "TA successfully assigned to Course!";
?>

<!-- Hyperlink to take back to main menu. -->
<p>
<br>
<a href="gradsec.php">Back to Main Menu</a>
</p>

</body>
</html>

