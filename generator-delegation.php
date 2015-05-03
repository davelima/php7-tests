<?php
/*
PHP7 supports generator delegation.
We use the same keyword (yield), but with "from" too.
So, for example:

function(){
	yield 1;
	yield 2;
	yield 3;
	yield 4;
	yield 5;
}

and

function(){
	yield from [1,2,3,4,5];
}

Performs the same action

Some examples:
*/

function a() {
	yield 2;
	yield 3;
	yield 4;
}

function b() {
	yield 1;
	yield from a();
	yield 5;
}

/*
1
2
3
4
5
*/
foreach (b() as $i) {
	echo $i . "<br>";
}

echo "<br><hr><br>";

function c() {
	yield 1;
	yield from array(2,3,4);
	yield 5;
}

/*
1
2
3
4
5
*/
foreach (c() as $i) {
	echo $i . "<br>";
}
