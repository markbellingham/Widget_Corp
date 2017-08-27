<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Functions: Arguments</title>
	</head>
	<body>

	<?php
		function say_hello_to($word) {
			echo "Hello {$word}!<br />";
		}

		$name = "John Doe";
		say_hello_to($name);
	?>

	<?php
		function better_hello($greeting, $target, $punct) {
			echo $greeting . " " . $target . $punct . "<br />";
		}

		better_hello("Hello", $name, "!");
		better_hello("Greetings", $name, "!!!");

		better_hello("Greetings", $name, null);
 	?>
 	<br />

	<?php
		$names = array("Matthew", "Mark", "Luke", "John", "Stephen", "Peter", "Issac");

		foreach ($names as $name) {
			say_hello_to($name) . "<br />";
		}
	?>

	</body>
</html>