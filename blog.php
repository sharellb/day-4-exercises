<!DOCTYPE html>
<html>
<body>
<h1>Cheese Articles</h1>
<?php
	$localhost = 'localhost';
	$username = 'root';
	$password = '';
	$connection = mysql_connect($localhost, $username, $password);

	if (!$connection) {
  		die('Unable to connect: ' . mysql_errno());
	}

	if ($connection) {
		$db_selected = mysql_select_db("day_4_exercises");
		$result = mysql_query('SELECT title, author, body FROM articles');
	  
  		if($result === FALSE) {
    		die(mysql_error());
		}	

			while ($row = mysql_fetch_array($result)) {
				echo $row['title'] . '<br/>';
				echo $row['author'] . '<br/>';
				echo $row['body'] . '<br/>';
				echo '<br/>';
			}
		mysql_close($connection);
	}
?>
</body>
</html>