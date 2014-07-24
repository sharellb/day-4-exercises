<!DOCTYPE html>
<html>
<body>

<?php 
	$city = $_GET['city'];

 	echo '<h1>Welcome to population data online</h1>';

	$cities = array(
		'Philadelphia' => 1553165,
		'Seattle' => 652405,
		'Austin' => 885400,
		'Miami' => 417650,
		'Atlanta' => 447841,
	);
	
	if (!$city || !isset($cities[$city])) {
		print "We don't have the population for that city. Try one of the cities below!";
	}
	else {

		print "The population of " .  $city .  " is " . $cities[$city] ;
	}

?>

<h2>Look at the population of one of these cities!</h2>
<ol>
<?php 
	foreach ($cities as $place => $population) {
		echo '<li><a href= "/sharell/population.php?city=' . $place . '">' . $place . '</a></li>';
	}
?>
</ol>

</body>
</html>
