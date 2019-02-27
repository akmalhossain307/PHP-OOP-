<?php 
//When same methods defined in parents and child class with same signature i.e know as method overriding

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
		$result=$a+$b;
		echo"Summation is: ".$result;
	}
	
}
$obj=new Calculate;
$obj->add(100,200);

?>