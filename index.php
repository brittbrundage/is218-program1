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

//This is how you print r access a array by naming they key you want to access
	print_r($myAssoc['value1']);

//This is how you define a class in php
	class myclass {
	public $myPublic;
	private $myPrivate;
	protected $myProtected;

	public function __construct() {

//when we are working inside the class scametic, property is a equal to a
//variable outside of a class. 3 different properties they can have.
//public can be used as properties outside of the class
//private is only inside the class
//protected is in between public and private, it is a property that can be 
//accessed inside classes and subclasses.

	$this->myPublic = 1;
//$this is the internal reference to the object within a class
//The arrow points to the preoprty or method being withing the object
	$this->myPrivate = 2;
	$this->MyProtected = 3;

//This is how you call a method inside an object and pass a value
	$this->sayHello('Brittani');
	}


	public function sayHello($name) {
		echo 'Hello' . $name;
	}

//This is how you create a new class object
	$obj = new myclass;
	print_r($obj);




?>
