<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jschilmoeller", "Password123!", "jschilmoeller");
	
	if(!empty($_POST['remove'])) {
		foreach($_POST['remove'] as $del){
			$post_query = "DELETE FROM Posts WHERE post_id = '" . $del . "'";
			$mysqli->query($post_query);
			echo "Deleted Successfully.<br>";
		}
	}
	else {
		echo "Nothing to remove.";
	}
?>
