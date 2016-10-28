<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jschilmoeller", "Password123!", "jschilmoeller");
	$user_query = "SELECT user_id FROM Users ORDER BY user_id ASC";
	$users = $mysqli->query($user_query);
	if($users->num_rows > 0) {
		while($currUser=$users->fetch_assoc()){
			echo "<option value= '" . $currUser["user_id"] . "'>" . $currUser["user_id"] . "</option>";
		}
	}
?>
