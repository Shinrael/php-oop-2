<?php

class Products {

  public $id;
  public $name;
  public $price;
  public $image;
  public $icon;
  public $type;
  
  public function __construct(string $_id, string $_name, float $_price, string $_image, string $_icon, string $_type){
    
    $this->id = $_id;
    $this->name = $_name;
    $this->price = $_price;
    $this->image = $_image;
    $this->icon = $_icon;
    $this->type = $_type;
    
  }


}
