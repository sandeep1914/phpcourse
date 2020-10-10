<!DOCTYPE html>
<html>
<head>
	<title>WhileLoop</title>
</head>
<body>
	<h1>
		<?php
			$count=0;
			while ($count <= 10) {
				echo "The count is: $count <br/>";
				$count++;
			}
//////////////////////////////////////////////////////
			do {
				echo "The count is: $count<br/>";
				$count++;
			} while ($count<=10);
		?>
	</h1>
</body>
</html>