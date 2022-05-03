<?php 

class Product
{
	private $id;
	private $name;
	private $weight;
	private $price;
	
	public function __construct(
		$name,
		$weight,
		$price) {
    $this->name = $name;
    $this->weight = $weight;
    $this->price = $price;
  	}

	public function setId($id){
		$this->id=$id;
	}
  	public function setName($name){
		$this->name=$name;
	}
	public function setWeight($weight){
		$this->weight=$weight;
	}
	public function setPrice($price){
		$this->price=$price;
	}

	/*--*/

	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getWeight(){
		return $this->weight;
	}
	public function getPrice(){
		return $this->price;
	}
}


 ?>