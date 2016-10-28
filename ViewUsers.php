<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jschilmoeller", "Password123!", "jschilmoeller");
	
	$user_query = "SELECT user_id FROM Users ORDER BY user_id ASC";
	
	$display_query = $mysqli->query($user_query);
	
	if($display_query->num_rows > 0) {
		echo "<div><table><tr><td>Users</td></tr>";
		while($currRow = $display_query->fetch_assoc()) {
			echo "<tr><td>" . $currRow["user_id"] . "</td></tr>";
		}
		echo "</table></div>";
	}
	else {
		echo "No users.";
	}
?>
