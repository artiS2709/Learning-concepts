<?php 
  
// Abstarct class can not contain a method with body. Method can be declared only not implemented.


abstract class Base { 
    // uncommenting following lines will give error.
	// abstract function printdata() 
    // { 
	// 	echo "Parent class printdata"; 
	// } 
}
