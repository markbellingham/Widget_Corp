<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "secretpassword";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	// Test if connection occured
	if (mysqli_connect_errno()) {
		die("Database connection failed: " .
			mysqli_connection_error() .
			" (" . mysqli_connection_errno() . ")"
		);
	}
?>

<?php
	// Often these are form values in $_POST
	$id = 5;

	// 2. Perform database query
	$query   = "DELETE FROM subjects ";
	$query	.= "WHERE id = {$id} ";
	$query	.= "LIMIT 1";

	$result = mysqli_query($connection, $query);

	// Returns the id of the last value set
	// mysqli_insert_id();
	// $id = mysqli_insert_id($connection);

	if ($result && mysqli_affected_rows($connection) == 1) {
		// Success
		// redirect_to("somepage.php");
		echo "Success";		
	} else {
		// Failure
		// $message = "Subject delete failed";
		die("Database query failed. " . mysqli_error($connection));
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>

	</body>
</html>

<?php
	// 5. Close database connection
	mysqli_close($connection);
?>