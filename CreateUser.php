<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);	
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jschilmoeller", "Password123!", "jschilmoeller");
	
	$user = $_POST['username'];
	
	$query = "INSERT INTO Users (user_id) VALUES ('" . $user . "');";
	
	if($user!=""){
		if($mysqli->query($query) === TRUE){
			echo "Successfully added " . $user . "<br>";
		}
		else{
			echo "Error: Username already exists";
		}
	}
	else{
		echo "Error: Username field left blank";
	}
	
	echo "<br><a href='http://people.eecs.ku.edu/~jschilmo/lab5/CreateUser.html'>Back</a>";
	
	$mysqli->close();
?>
