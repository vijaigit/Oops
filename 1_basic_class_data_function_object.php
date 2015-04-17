<?php

/**
*
Author : vijai
Date : 17-04-2015
Ref : http://www.phpro.org/tutorials/Object-Oriented-Programming-with-PHP.html
*
**/

class car{

	public $color;
	public $price;
	public $doors;
	
	public function __construct(){
		echo "<pre>";
		echo "<b>About this car : </b>\n\n";
	}
	public function show_color(){
		echo "The car color is : ".$this->color."\n";
	}
	
	public function show_price(){
		echo "The cost of price is : ".$this->price."\n";
	}
	
	public function show_doors(){
		echo "The doors in car : ".$this->doors."\n";
	}
}

	$obj = new car;

	$obj->color = "Red";
	$obj->price = "50000";
	$obj->doors = "4";

	$obj->show_color();
	$obj->show_price();
	$obj->show_doors();
 
?>