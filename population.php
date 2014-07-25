
<!DOCTYPE html>
<html>
<body>

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
		$result = mysql_query('SELECT city_name, population FROM population');
	  
  		if($result === FALSE) {
    		die(mysql_error());
		}	

		$city = $_GET['city'];

 		echo '<h1>Welcome to population data online</h1>';
			while ($row = mysql_fetch_array($result)) {
				
				if ($row['city_name'] == $city) {
					print "The population of " .  $row['city_name'] .  " is " . $row['population'] ;
				}
			}
			
			$result = mysql_query('SELECT city_name, population FROM population');

			while ($row = mysql_fetch_array($result)) {
				
				echo '<li><a href= "/day-4-exercises/population.php?city=' . $row['city_name'] . '">' . $row['city_name'] . '</a></li>';	
			}
			mysql_close($connection);
		}
?>
</body>
</html>