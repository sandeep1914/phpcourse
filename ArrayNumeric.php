<!DOCTYPE html>
<html>
<head>
	<title>ArrayNumeric</title>
</head>
<body>
	<h1>
		<?php
		$last_name=array("Singh", "Choudhary", "Kumar");
		$first_names = array("Sandeep", "Sanjeev", $last_name);
		echo $first_names[2][1];

		?>
	</h1>
</body>
</html>