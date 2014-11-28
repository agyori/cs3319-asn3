<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assigned a TA a Supervisor!</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>

<?php
   $profID = $_POST["profID"];
   $userID = $_POST["userID"];
   $assigntype = $_POST["assigntype"];

   if ($assigntype == "head") { // For assigning a HEAD supervisor
      // Simply try to update the TEACHINGASSISTANT table
      $query = 'update TEACHINGASSISTANT set profuserid="' . $profID . '" where userid="' . $userID . '"';
      if (!mysqli_query($connection, $query)) {
         die("Error: update failed");
      }
      echo "Professor successfully assigned to TA!";
   }
   else if ($assigntype == "co") { // For assigning a CO-supervisor
      // Simply add a row to the CoSUPERVISE table
      $query = 'insert into CoSUPERVISE values ("' . $profID . '","' . $userID . '")';
      if (!mysqli_query($connection, $query)) {
         die("Error: update failed");
      }
      echo "Professor successfully assigned to TA!";
   }
   else {
      // Something went terribly wrong.
      echo "Something went terribly wrong";
      die("Error: invalid assignment type");
   }
   mysqli_close($connection);
?>

<!-- Hyperlink to take back to main menu. -->
<p>
<br>
<a href="gradsec.php">Back to Main Menu</a>
</p>

</body>
</html>
