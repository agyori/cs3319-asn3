<?php
	$query = "select * from INSTRUCTOR";
	$result = mysqli_query($connection,$query);
	if(!$result){
		die("databases query failed.");
	}
	echo "Who are you looking up?</br>";
	while ($row = mysqli_fetch_assoc($result)){
		echo '<input type="radio" name="instructors" value="';
		echo $row["userid"];
		echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
	}
	mysqli_free_result($result);
?>
