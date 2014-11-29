<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Upload Image</title>
</head>
<body>
<?php 
include 'connectdb.php';
include 'upload_file.php';
?>

<?php
   $userID = $_POST["userID"];
   $query = 'update TEACHINGASSISTANT set imagelocation="' . $pic . '" where userid="' . $userID . '"';
   if (!mysqli_query($connection, $query)) {
      die("Error: update failed");
   }
   echo "TA successfully added!";
   mysqli_close($connection);
?>

<!-- Hyperlink to take back to main menu. -->
<p>
<br>
<a href="gradsec.php">Back to Main Menu</a>
</p>
</body>
</html>
