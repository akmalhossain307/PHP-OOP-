<?php 
/*Abstraction is a way of hiding information .

In abstraction there should be at least one method which must be declared but not defined.

The class that inherit this abstract class need to define that method.

There must be a abstract keyword that must be return before this class for it to be abstract class.

This class cannot be instantiated . only the class that implement the methods of abstract class can be instantiated.

There can be more than one methods that can left undefined.
*/

abstract class A
{
	abstract function x(); 
	public function y()
	{
		echo"Can be used as it is...";
	}
	
}

class B extends A 
{
	public function x()
	{
		echo"This method is declared in abstract class but defined in the extended class.. <br/>";
	}
}

// Create object of class B 
$obj=new B();
$obj->x();
$obj->y();





?>