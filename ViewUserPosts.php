<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jschilmoeller", "Password123!", "jschilmoeller");
	
	$user = $_POST['username'];
	
	$post_query = "SELECT post_id, content, author_id FROM Posts WHERE author_id = '" . $user . "' ORDER BY post_id ASC";
	
	$posts = $mysqli->query($post_query);
	
	if($posts->num_rows > 0) {
		echo "<div><table><tr><td>Post ID</td><td>Author</td><td>Content</td></tr>";
		while($currRow=$posts->fetch_assoc()) {
			echo "<tr><td>" . $currRow["post_id"] . "</td>";
			echo "<td>" . $currRow["author_id"] . "</td>";
			echo "<td>" . $currRow["content"] . "</td></tr>";
		}
		echo "</table></div>";
	}
	else {
		echo "User has no posts.";
	}
?>
