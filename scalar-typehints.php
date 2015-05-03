<?php
/*
PHP7 let us to define scalar typehints on methods and functions (finally!)

Now we can use, for example, "string", "int" or "float" on typehint:
*/

class MyClass {
	public function sum(float ...$params){
		echo implode(" + ", $params) . " = ";
		return array_sum($params);
	}
}


$test = new MyClass();

# some (obvious) results:
# echo $test->sum(10, 15, 12, 12, 12.5, 1111.2, '10test')); # Ok
# echo $test->sum(10, 15, 12, 12, 12.5, 1111.2, '10')); # Ok
# echo $test->sum(0b10, 0b10); # Ok
# echo $test->sum(0xFF, 0xCC); # Ok
# echo $test->sum(10, 15, 12, 12, 12.5, 1111.2, 'test')); # Error (duh)


