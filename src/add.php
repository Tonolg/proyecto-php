<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Add Data</title>
</head>

<body>

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);


	// checking empty fields
	if(empty($name) || empty($age) || empty($email) || empty($password)) {
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}if(empty($password)){

		}

		// link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		// if all the fields are filled (not empty)

		// insert data to database
		$stmt = mysqli_prepare($mysqli, "INSERT INTO users(name,age,email,password) VALUES(?,?,?,?)");
		mysqli_stmt_bind_param($stmt, "siss", $name, $age, $email, md5($password));
		mysqli_stmt_execute($stmt);
		mysqli_stmt_free_result($stmt);
		mysqli_stmt_close($stmt);

		// display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='dashboard_users.php'>View Result</a>";
	}
}

mysqli_close($mysqli);

?>

</body>
</html>
