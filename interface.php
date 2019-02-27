<?php 
/*
The class that is fully abstract is called interface.

Any class that implement this interface must use implements keyword and all the methods that are declared in the class must be defined here. otherwise this class also need to be defined as abstract.

Multiple inheritance is possible only in the case of interface.
*/

interface A
{
	function f1();
}

interface B
{
	function f2();
}

class C implements A,B
{
	function f1()
	{
		echo"Hi! How are you?";
	}
	function f2()
	{
		echo"<br/>I'm fine, and you?";
	}
}

$obj=new C;
$obj->f1();
$obj->f2();


?>