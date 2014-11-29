<?php
	$query = 'select * from TAAssignedTO group by coursenumber, year, term';
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("databases query failed.");
	}
	echo 'Which course would you like?</br>';
	while ($row = mysqli_fetch_assoc($result)){
		echo '<input type ="radio" name = "course" value= "';
		echo $row["coursenumber"];
		echo '">' . $row["coursenumber"] . ", " . $row["term"] . ", ". $row["year"] ." </br>";
	}
	mysqli_free_result($result);
?>
