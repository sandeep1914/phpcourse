<!DOCTYPE html>
<html>
<head>
	<title>StringManipulation</title>
</head>
<body>
	<h1>
		<?php
		$stuff="Sandeep is a PHP Coding Monster";
		//echo str_replace("Monster", "Dork", $stuff);
		//echo strtoupper($stuff);
		// echo ucwords($stuff);
		//echo ucfirst($stuff);
		// echo strtolower($stuff);
		// echo lcfirst($stuff);
		// echo strlen($stuff);
		echo str_shuffle($stuff);
		?>
	</h1>
</body>
</html>