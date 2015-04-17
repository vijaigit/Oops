<?php

/**
*
Author : vijai
Date : 17-04-2015
Ref : http://www.phpro.org/tutorials/Object-Oriented-Programming-with-PHP.html
*
*	In final class used to protect your code can not override and inherit the code. 
*
*	In abstract class can't create a object in directly.It's used to populate the data.
*
**/


abstract class parent_class{

 /*** child class must define these mthods ***/

	abstract protected function sum($a,$b);
	
	abstract protected function get_msg();
	
	public function show_msg(){
		echo $this->get_msg();
	}
}

class child_class extends parent_class{

	public function sum($a,$b){
		$c = $a + $b;
		echo "\n The value of a is : ".$a;
		echo "\n The value of b is : ".$b;
		echo "\n\n The result is : ".$c;
	}
	
	protected function get_msg(){
		return "Abstract Class  \n";
	}
}

$obj = new child_class;

echo "<pre>";
$obj->show_msg();
$obj->sum(10,20);


?>