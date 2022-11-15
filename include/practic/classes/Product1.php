<?php
class Product1 {
	private $name;
	private $price;
	private $quantity;

	public function __construct($name, $price, $quantity){
		$this->name = $name;
		$this->price = $price;
		$this->quantity = $quantity;
	}

	public function getName(){
		return $this->name;
	}

	public function getPrice(){
		return $this->price;
	}

	public function getQuantity(){
		return $this->quantity;
	}

	public function getCost(){
		return $this->getPrice() * $this->getQuantity();
	}
}


class Cart {
	private $products = [];

	public function add($newProduct){
		$this->products [] = $newProduct;
	}

	public function remove ($removeProd){
		foreach ($this->products as $key => $product){
			if ($removeProd == $products->getName()){
				return array_splice($this->products, $key, 1);
			}
		}
	}

	public function getProducts(){
		foreach ($this->products as $product){
			print $product->getName() . ' '; 
		}
	}
}


