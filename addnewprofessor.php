<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>TA Added!</title>
</head>
<body>
<?php
        include 'connectdb.php'
?>

<?php
   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $profID = $_POST["profID"];
   
   $query = 'insert into INSTRUCTOR (firstname, lastname, userid) values ("' . $fname . '","' . $lname . '","' . $profID . '")';
   if (!mysqli_query($connection, $query)) {
      die("Error: insert failed" . mysqli_error($connection));
   }
   else {
      echo "Professor was added!";
   }
   mysqli_close($connection);
?>
<!-- Hyperlink to take back to main menu. -->
<p>
<br>
<a href="gradsec.php">Back to Main Menu</a>
</body>
</html>

