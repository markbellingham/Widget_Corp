<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Continue</title>
	</head>
	<body>

	<?php
		for ($count = 0; $count <= 10; $count++) {
			if ($count == 5) {
				continue;
			}
			echo $count . ", ";
		}
	?>
	<br />

	<?php
		for ($count = 0; $count <= 10; $count++) {
			if ($count % 2 == 0) { continue; }
			echo $count . ", ";
		}
	?>
	<br />

	<?php //what's wrong with this? **Needs an extra increment inside the if statement**
		$count = 0;
		while ($count <= 10) {
			if ($count == 5) {
				$count++;
				continue;
			}
			echo $count . ", ";
			$count++;
		}
	?>
	<br />

	<?php // loop inside a loop with continue
		for ($i = 0; $i <= 5; $i++) {
			if ($i % 2 == 0) { continue; }
			for ($k = 0; $k <= 5; $k++) {
				if ($k == 3) { continue; }
				echo $i . "-" . $k . "<br />";
			}
		}
	?>
	<br />

	<?php // loop inside a loop with continue
		for ($i = 0; $i <= 5; $i++) {
			if ($i % 2 == 0) { continue(1); }
			for ($k = 0; $k <= 5; $k++) {
				if ($k == 3) { continue(2); }
				echo $i . "-" . $k . "<br />";
			}
		}
	?>

	</body>
</html>