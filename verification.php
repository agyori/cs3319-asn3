<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Verification</title>
</head>
<body>
<?php
   // Get the password attempt
   $password = $_POST["password"];

   // See if it correct.
   if ($password == "janice") {
      header('Location: gradsec.php');
      exit;      
   }
   else {
      echo "Incorrect password.";
   }
?>

<p>
<br>
<a href="index2.php">Back to Log In Screen</a>
</p>
</body>
</html>
