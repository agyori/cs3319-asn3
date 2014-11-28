<?php
include 'connectdb.php';
?>
<?php
	$query1 = 'select * from TEACHINGASSISTANT where profuserid="'. $_POST['instructors'] .'"';
	$query2 = 'select * from TEACHINGASSISTANT where userid = (select tauserid from CoSUPERVISE where CoSUPERVISE.tauserid not in (select userid from TEACHINGASSISTANT where TEACHINGASSISTANT.profuserid="' . $_POST['instructors'] .'"))';
	$result1 = mysqli_query($connection,$query1);
	$result2 = mysqli_query($connection,$query2);
	if(!$result1 || !$result2){
		die("databases query failed.");
	}
	echo "Which teaching assitant would you like?</br>";
	while ($row = mysqli_fetch_assoc($result1)){
		echo '<input type ="radio" name = "teachassist" value "';
		echo $row["userid"];
		echo '">' . $row["firstname"] . " " . $row["lastname"] . " ". $row["userid"] . " head supervisor " . $row["imagelocation"]. " <br>";
	}
	while ($row = mysqli_fetch_assoc($result2)){
		echo '<input type ="radio" name = "teachassist" value "';
		echo $row["userid"];
		echo '">' . $row["firstname"] . " " . $row["lastname"] . " " . $row["userid"] . " CoSupervisor " . $row["imagelocation"]. " <br>";
	}
	mysqli_free_result($result1);
	mysqli_free_result($result2);
?>
