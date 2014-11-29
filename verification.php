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
      header('Location: http://ec2-54-165-155-17.compute-1.amazonaws.com/assignment3/verification.php');
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
