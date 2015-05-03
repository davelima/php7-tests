<?php
/*
https://wiki.php.net/rfc/anonymous_classes
In PHP 7, we can create anonymous classes like the following:
*/

$myFloat = 10.54;

$myObject = (new class($myFloat) { # Anonymous class
	public function __construct(float $number) {
		$number = $number * rand(10, 15);
		$this->number = $number;
	}
});

echo $myObject->number;
