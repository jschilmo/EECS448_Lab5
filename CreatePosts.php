<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);	
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jschilmoeller", "Password123!", "jschilmoeller");
	
	$user = $_POST['username'];
	
	$post = $_POST['post'];
	
	$exists = $mysqli->query("SELECT * FROM Users WHERE user_id = '" . $user . "'");
	
	$insert = "INSERT INTO Posts (content, author_id) VALUES ('" . $post . "','" . $user . "')";
	
	if($user!="" && $post!=""){
		if($exists->num_rows == 1){
			if($mysqli->query($insert) === TRUE) {
				echo "Post Successful.";
			}
			else {
				echo "Insert query failed.";
			}
		}
		else {
			echo "User does not exist";
		}
	}
	else {
		echo "Username or post left blank.";
	}
	echo "<br><a href='https://people.eecs.ku.edu/~jschilmo/lab5/CreatePosts.html'>Back</a>";
?>
