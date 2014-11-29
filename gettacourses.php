<?php
	$query1 = 'select * from TAAssignedTO where tauserid = "'. $_POST["ta"] .'"';
	$query2 = 'select COUNT(*) from TAAssignedTO where tauserid = "'. $_POST["ta"] .'"';
	$query3 = 'select gradtype from TEACHINGASSISTANT where userid = "'. $_POST["ta"] .'"';
	$result1 = mysqli_query($connection,$query1);
	$result2 = mysqli_query($connection, $query2);
	$result3 = mysqli_query($connection, $query3);
	if(!$result1 || !$result2 || !$result3){
		die("database query failed.");
	}
	//This is to print the courses a ta is assigned to
	echo "Courses:</br>";
	//list the courses
	while ($row=mysqli_fetch_assoc($result1)){
		echo $row["coursenumber"] . '</br>';
	}
	$row=mysqli_fetch_assoc($result3);
	$count=mysqli_fetch_assoc($result2);
	//check if it is a PhD student
	if ($row["gradtype"]=="PhD"){
	//check course limit
		if($count["COUNT"]>=8){
			echo '<p>Teaching Assistant has reached course limit</p></br>';
		}
	}
	//check if it is a masters student
	if ($row["gradtype"]=="Masters"){
        //check course limit
                if($count["COUNT"]>=3){
                        echo '<p>Teaching Assistant has reached course limit</p></br>';
                }
        }

?>
