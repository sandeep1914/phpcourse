<!DOCTYPE html>
<html>
<head>
	<title>Foreach</title>
</head>
<body>
	<h1>
		<?php
		$names=array("Sandeep","Sanjeev","Pradeep");
		foreach ($names as $value) {
			echo "$value<br/>";
		}
		?>

		<?php
		$count = 0;
		$name = array("John", "Steve", "Mary");
		while ($count < count($name)) {
			echo "Name: $name[$count] <br/>";
			$count++;
		}
		?>
	</h1>
</body>
</html>