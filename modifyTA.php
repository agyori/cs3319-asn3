<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Modify TA</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>

<?php
   $userID = $_POST["userID"];
   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $studenttype = $_POST["studenttype"];


   // Update the TEACHINGASSISTANT table where userid=$userID
   $query = 'update TEACHINGASSISTANT set firstname="' . $fname . '", lastname="' . $lname . '", gradtype="' . $studenttype . '" where userid="' . $userID . '"';
   if (!mysqli_query($connection, $query)) {
      die("Error: update failed");
   }
   echo "TA successfully modified!";
   mysqli_close($connection);
?>

<!-- Hyperlink to take back to main menu. -->
<p>
<br>
<a href="gradsec.php">Back to Main Menu</a>
</p>
</body>
</html>
