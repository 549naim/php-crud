<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$password2 = mysqli_real_escape_string($mysqli, $_POST['password2']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$n_id = mysqli_real_escape_string($mysqli, $_POST['n_id']);
	$relation_status = mysqli_real_escape_string($mysqli, $_POST['relation_status']);
		
	// checking empty fields
	if(empty($username) || empty($email) || empty($password) || empty($password2) || empty($gender) || empty($n_id) || empty($relation_status) ) {
				
		if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		if(empty($password2)) {
			echo "<font color='red'>Confirm Password field is empty.</font><br/>";
		}
		if(empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
		}
		if(empty($n_id)) {
			echo "<font color='red'>National Id field is empty.</font><br/>";
		}
		if(empty($relation_status)) {
			echo "<font color='red'>Relational status field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		if ($password==$password2) {
			$result = mysqli_query($mysqli, "INSERT INTO user_info(username,email,password,password2,gender,n_id,relation_status) VALUES('$username','$email','$password','$password2','$gender','$n_id','$relation_status')");
			header("newfile/registration.html");
			exit();
		//display success message
		echo "<font color='green'>Data added successfully.";
		// echo "<br/><a href='index.php'>View Result</a>";
		}
		else {
			echo "<font color='red'>Password didnot match.";
		}
		
	}
}
?>
</body>
</html>
