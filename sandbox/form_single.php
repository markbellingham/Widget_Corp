<?php
	require_once("included_functions.php");

	if (isset($_POST['submit'])) {
		//form was submitted
		$username = $_POST["username"];
		$password = $_POST["password"];		

		if ($username == "Mark" && $password == "secret") {
			// successful login
			redirect_to("basic.html");
		} else {
		$username = $_POST["username"];
		$message = "There were some errors";
		}

	} else {
		$username = "";
		$password = "";
		$message = "Please log in.";
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>

	<?php echo $message; ?><br />
		<form action="form_single.php" method="post">
			Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br />
			Password: <input type="password" name="password" value="" /><br />
			<br />
			<input type="submit" name="submit" value="Submit" />
		</form>

	</body>
</html>