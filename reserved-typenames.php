<?php
/*
https://wiki.php.net/rfc/reserve_more_types_in_php_7

In PHP7, "int", "float", "bool", "string", "true", "false" and "null" are reserved keywords, so we cannot use it on class, interfaces, traits or namespaces.
So, by example, the following will raise a fatal error:
*/

class int {
	public function __construct($number) {
		return (int) $number;
	}
}

// Fatal error: Cannot use 'int' as class name as it is reserved

