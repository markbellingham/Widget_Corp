<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transisional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<title>untitled</title>
</head>
<body>

	<?php
	$var1 = 3;
	$var2 = 4;
	?>
	Basic Maths: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
	<br />
	Absolute value:		<?php echo abs(0 - 300);	?><br />
	Exponential:		<?php echo pow(2,8);		?><br />
	Square root:		<?php echo sqrt(100);		?><br />
	Modulo:				<?php echo fmod(20,7);		?><br />
	Random:				<?php echo rand();			?><br />
	Random (min,max)	<?php echo rand(1,10);		?><br />
	<br />
	+= : <?php $var2 += 4; echo $var2; ?><br />
	-= : <?php $var2 -= 4; echo $var2; ?><br />
	*= : <?php $var2 *= 3; echo $var2; ?><br />
	/= : <?php $var2 /= 4; echo $var2; ?><br />
	<br />
	Increment : <?php $var2++; echo $var2; ?><br />
	Decrement : <?php $var2--; echo $var2; ?><br />
	<br />
	<?php
	echo 1 + "2 houses";
	?>

</body>
</html>