<?php
// Rule 3. The number of required arguments must be the same. 
// However, the child class may have optional arguments in addition

abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass extends ParentClass {
    // The child class may define optional arguments that are not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear") {
      if ($name == "John Doe") {
        $prefix = "Mr";
      } elseif ($name == "Jane Doe") {
        $prefix = "Mrs";
      } else {
        $prefix = "";
      }
      return "{$greet} {$prefix}{$separator} {$name}";
    }
  }
  
  $class = new ChildClass;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");