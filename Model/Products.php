<?php

class Products {

  public $name;
  public $price;
  public $category;

  public function __construct(string $_name, float $_price, string $_category){
    
    $this->name = $_name;
    $this->price = $_price;
    $this->category = $_category;

  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
      return $this->price;
  }

  public function getCategory() {
      return $this->category;
  } 

}
