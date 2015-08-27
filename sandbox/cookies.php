	<?php
		/* Remember: Setting cookies must be before *any* HTML output
		unless output buffering is turned on.*/
		$name = "test";
		$value = "hello";
		$expire = time() + (60*60*24*7); // add seconds
		setcookie($name, $value, $expire);

		//setcookie($name);
		//setcookie($name, null, $expire)
		//setcookie($name, $value, time() - 3600);

		// Kevin's recommendation for unsetting
		// setcookie($name, null, time() - 3600);
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Cookies</title>
	</head>
	<body>

	<?php
	$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
	echo $test;
	?>

	</body>
</html>