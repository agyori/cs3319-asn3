<!DOCTYPE html>
<html>
<head>
<metas charset="utf-8">
<title>Grad Secretary Control Panel</title>
</head>
<body>
<?php 
include 'connectdb.php';
?>
<h1> Welcome Grad Secretary!</h1>

<!--The main menu-->
<a name="menu"></a>
<h2>Main Menu:</h2>
<ul>
	<li><a href="#ta_functions">TA Functions:</a></li>
		<ul>
		<li><a href="#add_ta">Add TA</a></li>
		<li><a href="#upload_image">Upload Image</a></li>
		<li><a href="#modify_ta_name">Modify TA Name</a></li>
		<li><a href="#delete_ta">Delete TA</a></li>
		</ul>
	<li><a href="#professor_functions">Professor Functions:</a></li>
		<ul>
		<li><a href="#add_professor">Add Professor</a></li>
		<li><a href="#assign_professor_as_supervisor">Assign Professor as Supervisor</a></li>
		<li><a href="#delete_professor">Delete Professor</a></li>
		</ul>
	<li><a href="#course_functions">Course Functions:</a></li>
		<ul>
		<li><a href="#add_course">Add Course</a></li>
		<li><a href="#assign_ta_to_course">Assign TA to Course</a></li>
		<li><a href="#delete_course">Delete Course</a></li>
		</ul>
</ul>

<p>
<hr>
</p>

<!--The beginning of the functions-->

<a name="ta_functions"></a>
<h1>TA Functions</h1>
<a name="add_ta"></a>
<h2>Add TA:</h2>

<!-- ADD NEW TA FORM -->
<form action="addnewTA.php" method="post"
enctype="multipart/form-data">
New TA's:<br>
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
Western User ID: <input type="text" name="userID"><br>
Student Type: <br>
<input type="radio" name="gradtype" value="Masters">Masters<br>
<input type="radio" name="gradtype" value="PhD">PhD<br>
Head Supervisor User ID: <input type="text" name="headID"><br>
<input type="submit" value="Add New TA"><br>
</form>

<p>
<a href="#menu">Back to Menu</a>
<br><br><br>
</p>

<a name="upload_image"></a>
<h2>Upload Image:</h2>

<p>
<a href="#menu">Back to Menu</a>
<br><br><br>
</p>

<a name="modify_ta_name"></a>
<h2>Modify TA Name:</h2>

<p>
<a href="#menu">Back to Menu</a>
<br><br><br>
</p>

<a name="delete_ta"></a>
<h2>Delete TA:</h2>


<p>
<a href="#menu">Back to Menu</a>
<hr>
</p>

<a name="professor_functions"></a>
<h1>Professor Functions</h1>
<a name="add_professor"></a>
<h2>Add Professor:</h2>

<p>
<a href="#menu">Back to Menu</a>
<br><br><br>
</p>

<a name="assign_professor_as_supervisor"></a>
<h2>Assign Professor as Supervisor:</h2>

<!--Remember to add a radio button with the options "co-supervisor" and
    "head supervisor"-->

<p>
<a href="#menu">Back to Menu</a>
<br><br><br>
</p>

<a name="delete_professor"></a>
<h2>Delete Professor</h2>

<p>
<a href="#menu">Back to Menu</a>
<hr>
</p>

<a name="course_functions"></a>
<h1>Course Functions</h1>
<a name="add_course"></a>
<h2>Add Course:</h2>

<p>
<a href="#menu">Back to Menu</a>
<br><br><br>
</p>

<a name="assign_ta_to_course"></a>
<h2>Assign TA to Course:</h2>

<p>
<a href="#menu">Back to Menu</a>
<br><br><br>
</p>

<a name="delete_course"></a>
<h2>Delete Course:</h2>

<p>
<a href="#menu">Back to Menu</a>
<hr>
</p>

</body>
</html>
