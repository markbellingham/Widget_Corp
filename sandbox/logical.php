<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>

	<?php
	$a = 3;
	$b = 4;

	if($a > $b){
		echo "a is larger than b";
	}else if($a < $b){
		echo "a is smaller than b";
	}else{
		echo "a is equal to b";
	}
	?>
	<br />
	
	<?php //Only welcome new users
	$new_user = true;
	if ($new_user = true) {
		echo "<h1>Welcome!</h1>";
		echo "<p>We are glad you decided to join us.</p>";
	}
	?>
	<br />

	<?php // don't divide by zero
	$numerator = 20;
	$denominator = 0;
	$result = 0;
	if ($denominator > 0) {
		$result = $numerator / $denominator;
	}
	echo "Result: {$result}";
	?>
	</body>
</html>