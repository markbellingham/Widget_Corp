<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Default Argument Values</title>
	</head>
	<body>

	<?php
		function paint($room = "office", $colour = "red") {
			return "The colour of the {$room} is {$colour}.<br />";
		}

		echo paint();
		echo paint("bedroom","blue");
		echo paint("bedroom",null);
		echo paint("blue");
	?>

	</body>
</html>