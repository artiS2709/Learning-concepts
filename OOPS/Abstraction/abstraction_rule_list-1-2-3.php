<?php 

// Rule 1. Abstract class is the class in which at least one method is abstract.
// Rule 2. Abstarct class is declared with the help of abstract keyword.
// Rule 3. Abstract class can contain abstract as well as non-abstract methods.

// Abstract class example in PHP 
abstract class base 
{ 
	// This is abstract function 
	abstract function printdata(); 
	
	// This is not abstract function 
	function pr() 
	{ 
		echo "Base class"; 
	} 
}
