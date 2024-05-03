<?php

class Products {

  public $id;
  public $name;
  public $price;
  
  public function __construct(string $_id, string $_name, float $_price){
    
    $this->id = $_id;
    $this->name = $_name;
    $this->price = $_price;
    
  }

  public function getId() {
    return $this->id;
  } 

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
      return $this->price;
  }

}
