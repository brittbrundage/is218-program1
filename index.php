<?php
//Lesson 1

//This is how you print test in php
	echo 'hello world';

//This is how you store a value in a variable
	$myvar = 'Some Text';

//This is an example of the difference between single quotes and double quotes
	echo '<br>';
	echo '$myvar';
	echo '<br>';
	echo "$myvar";

//This is an example of php arrays

	$myarray = array();
	$myarray[] = 'some value 1';
	$myarray[] = 'some value 2';
	$myarray[] = 'some value 3';

//Two ways to print to the screen which is print or echo (most people use echo), print_r is used to see inside of objects or arrays
	print_r($myarray);

//This is an example of associative array and a nested array

	$myAssoc = array('value1' => $myarray, 'value2' => $myarray);

	print_r($myAssoc);


?>
