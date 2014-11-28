<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Deleted TA!</title>
</head>
<body>
<?php
include 'connectdb.php';
?>

<?php
   $userID = $_POST["userID"];
   $query = 'delete from TEACHINGASSISTANT where userid="' . $userID . '"';
   $result = mysqli_query($connection, $query);
   if (!$result) {
      die("delete failed");
   }
   else {
      echo "TA successfully removed"
   }
   mysqli_close($connection);
?>
</body>
</html>
