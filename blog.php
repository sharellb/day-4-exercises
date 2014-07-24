<!DOCTYPE html>
<html>
<body>
<h1>Cheese Articles</h1>
<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<title>Cheese</title>
</head>
<?php

	$articles = array(); //create blog array
	
	$article = new stdClass(); //define objects with attributes
	$article->title = "All About Cheese";
	$article->author = "Mr. Cheese";
	$article->body = "<p>I love cheese, especially mascarpone when the cheese comes out everybody's happy. Fondue blue castello manchego the big cheese hard cheese the big cheese emmental emmental. Cut the cheese cheeseburger mozzarella stinking bishop fromage swiss swiss halloumi. Who moved my cheese everyone loves danish fontina blue castello hard cheese cheese and wine swiss.</p>";
	$articles[] = $article; //save to array

	$article = new stdClass();
	$article->title = "Still Cheese";
	$article->author = "Mrs. Cheese";
	$article->body = "<p>Swiss camembert de normandie st. agur blue cheese. Emmental manchego pepper jack when the cheese comes out everybody's happy stinking bishop port-salut dolcelatte pecorino. Smelly cheese taleggio cheese and biscuits the big cheese cheesecake cheese and biscuits danish fontina cut the cheese. Cheese strings lancashire roquefort halloumi queso cheesy feet when the cheese comes out everybody's happy pecorino. Swiss boursin fromage frais.</p>";
	$articles[] = $article;

	$article = new stdClass();
	$article->title = "More Cheese";
	$article->author = "Cheese Jr.";
	$article->body = "<p>Cheesy grin cheeseburger fondue. Caerphilly boursin bocconcini fondue the big cheese cheese and wine red leicester cheddar. Croque monsieur melted cheese cheese strings st. agur blue cheese cheese and wine fromage frais pecorino pecorino. Jarlsberg babybel blue castello caerphilly camembert de normandie red leicester brie paneer. Croque monsieur cheese slices cheesy feet.</p>";
	$articles[] = $article;

	foreach ($articles as $article) { //cycle through each array and print out all of the attributes
		echo '<div>';
		echo '<h2>'. $article->title . '</h2>';
		echo '<h3><i> by '. $article->author . '</i></h3>';
		echo $article->body ;
		echo '</div>';
	}

?>
</body>
</html>