<?php 
//This is an object oriented concept where same function can be used for different purposes. For example function name will remain same but it take different number of arguments and can do different task.

class Calculation{
	
	function add($a,$b)
	{
		$result=$a+$b;
		echo"Summation is: ".$result;
	}
}

class Calculate extends Calculation{
	function add($a,$b)
	{
		$result=$a-$b;
		echo"Subtraction is: ".$result;
	}
	
}
$obj=new Calculate;
//method name is add() but perform subtration
$obj->add(300,200);

?>