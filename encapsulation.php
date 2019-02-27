<?php 
//Encapsulation is a concept of wrapping up or binding up related data members and methods in a single module known as encapsulation

class Calculation{
	var $a=100;
	var $b=50;
	function add()
	{
		$sum=$this->a+$this->b;
		echo"Addition is: ".$sum;
	}
	function sub()
	{
		$sub=$this->a-$this->b;
		echo"<br />Subtraction is: ".$sub;
	}
	
	function mul()
	{
		$mul=$this->a*$this->b;
		echo"<br />Multiplication is: ".$mul;
	}
	
	function div()
	{
		$div=$this->a/$this->b;
		echo"<br />Division is: ".$div;
	}
	
}

$cal=new Calculation;
$cal->add();
$cal->sub();
$cal->mul();
$cal->div();

?>