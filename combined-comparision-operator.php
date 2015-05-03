<?php
/*
https://wiki.php.net/rfc/combined-comparison-operator

PHP7 will introduce a new comparator: <=> (aka spaceship comparator)
It does a three-way comparision, so, are three possible return values: -1, 0 and 1.

Example: $a <=> $b

Is equal to:

if ($a > $b) {
	return 1;
} elseif ($b > $a) {
	return -1;
} else { // equal values
	return 0;
}

It introduces a new constant in addition: T_SPACESHIP. Use it to check if the operator is available or not.

*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Combined comparison operator</title>
</head>
<body>
<?php
echo "<pre>" . PHP_EOL;
echo "T_SPACESHIP exists?" . PHP_EOL; // Since we're using PHP7, it is true.
$haveSpaceship = defined("T_SPACESHIP");
echo ($haveSpaceship ? "Yes." : "Nope.") . PHP_EOL;
if (! $haveSpaceship)
	die("Halt!");

?>
<fieldset>
	<legend>Comparando com o operador <=></legend>

	<form method="post">
		<label>Value A</label>
		<input type="text" name="a">

		<label>Value B</label>
		<input type="text" name="b">

		<button type="submit">Compare</button>
	</form>
</fieldset>

<?php
if ($_POST) {
?>
<blockquote>
<?php
	$a = $_POST['a'];
	$b = $_POST['b'];
	echo "$a <=> $b";
	echo"<br>";
	$result = ($a <=> $b);
	var_dump ($result);
	echo"<br>";
	switch($result) {
		case 1:
			echo "$a is greater than $b";
			break;
		case -1:
			echo "$b is greather than $a";
			break;
		default:
			echo "$a and $b are equal (\$result: $result)";
			break;
	}
?>
</blockquote>
<?php
}
?>
</body>
</html>
