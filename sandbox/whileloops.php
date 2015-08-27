<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Loops: while</title>
	</head>
	<body>

	<?php
	$count = 0;
	while ($count <= 10) {
		if ($count == 5) {
			echo "FIVE, ";
		} else {
			echo $count . ", ";			
		}
		$count ++; //increment by 1
	}
	echo "<br />";
	echo "Count: {$count}";
	?>
	<br />

	<?php
	$number = 0;
	while ($number <= 10) {
		if (($number % 2) == 0) {
			switch ($number) {
				case  0: echo "ZERO, ";			break;
				case  2: echo "TWO, ";			break;
				case  4: echo "FOUR, ";			break;
				case  6: echo "SIX, ";			break;
				case  8: echo "EIGHT, "; 		break;
				case 10: echo "TEN, ";			break;
			} 
		} else {
			echo $number . ", ";
		}
		$number++;
	}
	?>
	<br />

	</body>
</html>