	<?php
		// Sessions use cookies which use headers
		// Must start before any HTML output
		// unless output buffering is turned on.
		session_start();
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Sessions</title>
	</head>
	<body>

	<?php
		$_SESSION["first_name"] = "Mark";
		$name = $_SESSION["first_name"];
		echo $name
;\	?>

	</body>
</html>