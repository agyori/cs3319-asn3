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
   $userID = $_POST["userID"];
   $headID = $_POST["headID"];
   // Check if the headID is an actual ID in the professor table.
   
   $query1 = 'select max(studentnumber) as maxStudentNum from TEACHINGASSISTANT';
   $result = mysqli_query($connection,$query1);
   if (!$result) {
      die("database max query has failed");
   }
   $row = mysqli_fetch_assoc($result);
   $newkey = intval($row["maxStudentNum"]) + 1;
   $studentNum = (string) $newkey;
   $query = 'insert into TEACHINGASSISTANT (firstname, lastname, userid, studentnumber, profuserid) values ("' . $fname . '","' . $lname . '","' . $userID . '","' . $studentNum . '","' . $headID . '")';
   if (!mysqli_query($connection, $query)) {
      die("Error: insert failed" . mysqli_error($connection));
   }
   else {
      echo "TA was added!";
   }
   mysqli_close($connection);
?>
<!-- Hyperlink to take back to main menu. -->
<p>
<br>
<a href="gradsec.php">Back to Main Menu</a>
</body>
</html>








