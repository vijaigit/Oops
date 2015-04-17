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
	protected $model = 'Alto';
	
	public function __construct(){
		echo "<pre>";
		echo "<b>About this car : </b>\n\n";
	}
	public function show_color(){
		echo "The color is : ".$this->color."\n";
	}
	
	public function show_price(){
		echo "The cost is : ".$this->price."\n";
	}
	
	public function show_doors(){
		echo "The number of doors : ".$this->doors."\n";
	}
}

class car_model extends car{
	
	private $brand;
	
	public function set_car_brand($brand_name){
		$this->brand = $brand_name;
	}
	
	public function show_brand(){
		echo "The brand name is : ".$this->brand."\n";
	}
	
	public function show_car_model(){
		echo "The model is : ".$this->model;
	}
}
	$obj = new car_model;

	$obj->color = "Red";
	$obj->price = "50000";
	$obj->doors = "4";

	$obj->show_color();
	$obj->show_price();
	$obj->show_doors();
	$obj->set_car_brand("Maruthi Suziki");
	$obj->show_brand();
	$obj->show_car_model();
?>
 