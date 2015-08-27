<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<title>From Processing</title>
</head>
<body>

	<pre>
		<?php
		print_r($_POST);
		?>
	</pre>
	<br />
	<?php
	
		// detect form submission
	if (isset($_POST['submit'])) {
		echo "form was submitted";

		// set default values
		if (isset($_POST["username"])) {
			$username = $_POST["username"];			
		} else {
			$username = "";
		}
		if (isset($_POST["password"])) {
			$password = $_POST["password"];		
		} else {
			$password = "";
		}

		// set default values using ternary operator
		// boolean_test ? value_if_true : value_if_false
		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";

	} else {
		$username = "";
		$password = "";
	}
	?>

	<?php
	
	echo "{$username}: {$password}";
	?>

</body>
</html>