<?php
/*
PHP7 supports functions/methods return types using this syntax:

function myFunction(): RETURNTYPE {
 # Code
}

Example:
*/

function returnsInt(): int {
	return 10; // Ok
}

function returnsFloat(): float {
	return "not a float"; // Fatal error: Return value of returnsFloat() must be of the type float, string returned
}


# Also works with classes:
class CustomClass {
	
	public $name;

	public function __construct(){
		$this->name = "test";
		return $this->name;
	}
}

function returnsCustomClass(): CustomClass {
	return new CustomClass();
}

