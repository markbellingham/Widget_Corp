<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<!--List of Array Functions can be found at php.net/manual/en/ref_array.php-->

<html lang="en">
	<head>
		<title>Array Functions</title>
	</head>
	<body>

	<?php $numbers = array(8,23,15,42,16,4); ?>

	Count:			<?php echo count($numbers);	?><br />
	Max value:		<?php echo max($numbers);	?><br />
	Min value:		<?php echo min($numbers);	?><br />
	<br />
	<pre>
	<!--Sorts the numbers in place. No need to put $numbers = sort($numbers).
	The old array no longer exists and has been replaced with the sorted one.-->
	Sort:			<?php echo sort($numbers);	print_r($numbers);	?><br />
	Reverse sort:	<?php echo rsort($numbers);	print_r($numbers);	?><br />
	</pre>
	<br />
	Implode:		<?php echo $num_string = implode(" * ", $numbers);	?><br />
	Explode:		<?php print_r(explode(" * ", $num_string)); 		?><br />
	<br />

	15 in array?:	<?php echo in_array(15, $numbers); // returns T/F 	?><br />
	19 in array?:	<?php echo in_array(19, $numbers); // returns T/F 	?><br />

	</body>
</html>