<!DOCTYPE html>
<html>
<head>
<meta charset="utf=8">
<title>Delete Professor</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>

<?php
   $profuserID = $_POST["profuserID"];
   
   $query = 'delete from INSTRUCTOR where userid="' . $profuserID . '"';
   if (!mysqli_query($connection, $query)) {
      die("Error: could not delete. If the professor is a head supervisor \n for a TA then you must either delete the TA or assign the TA \n a new head supervisor");
   }
   echo "Professor successfully deleted!";
?>

<!-- Hyperlink to take back to main menu. -->
<p>
<br>
<a href="gradsec.php">Back to Main Menu</a>
</p>

</body>
</html>
