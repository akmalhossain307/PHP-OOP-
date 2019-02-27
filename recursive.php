<?php 
//Recursive function is a function which calls itself again and again until the termination condition arrive.

function fact($n)
	{
		if($n===0)
		{
			return 1;
		}
		else
		{
			return $n*fact($n-1);
		}
	}


echo "The factorial value is: ".fact(5);

?>