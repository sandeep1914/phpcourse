<!DOCTYPE html>
<html>
<head>
	<title>ArrayCount</title>
</head>
<body>
	<h1>
		<?php
		 //ArrayCount Associative
		$fav_pizza = array(
			"John"=>"Pepperoni",
			"Steve"=>"Cheese",
			"Mary"=>"Mushroom",
		);
		echo count($fav_pizza);
		?>
	</h1>
	<h2>
		<?php
		//Array-Numeric
		$names=array("John","Steve", "Mary");
		echo $names[count($names)-1];
		?>
	</h2>
</body>
</html>