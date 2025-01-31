<?php 
// Rule2. The child class method must be defined with the same or a less restricted access modifier.
// Example : If the abstract method is defined as protected, 
// the child class method must be defined as either protected or public, but not private.

abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass extends ParentClass {
    public function prefixName($name) {
      if ($name == "John Doe") {
        $prefix = "Mr.";
      } elseif ($name == "Jane Doe") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "{$prefix} {$name}";
    }
  }
  
  $class = new ChildClass;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");