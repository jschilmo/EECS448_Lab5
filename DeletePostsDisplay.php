<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	$mysqli = new mysqli("mysql.eecs.ku.edu", "jschilmoeller", "Password123!", "jschilmoeller");
	
	$post_query = "SELECT author_id, content, post_id FROM Posts ORDER BY post_id ASC";
	
	$posts = $mysqli->query($post_query);

	if(($posts->num_rows)>0){
		echo "<table><tr><td> Author </td><td> Content</td><td>Post Number</td><td>DELETE</td></tr>";
		while($entry= $posts->fetch_assoc()){
			echo "<tr><td>" . $entry['author_id'] . "</td>";
			echo "<td>" . $entry['content'] . "</td>";
			echo "<td>" . $entry['post_id'] . "</td>";
			echo "<td><input type= checkbox' name='remove[]' value='" . $entry['post_id'] ."'></td></tr> ";
		}
		echo "</table>";
	}
	else{
		echo "no Posts";
	}
?>
