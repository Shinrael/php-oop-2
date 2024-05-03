<?php

class Products {

  public $id;
  public $name;
  public $price;
  public $image;
  public $icon;
  public $description;
  
  public function __construct(int $_id, string $_name, float $_price, string $_image, string $_icon, string $_description){
    
    $this->id = $_id;
    $this->name = $_name;
    $this->price = $_price;
    $this->image = $_image;
    $this->icon = $_icon;
    $this->description = $_description;
    
  }

  public function getInfo(){
    return $this->description . ' ' . '(' . $this->icon . ')' .  ' A soli ' . $this->price . '&euro;';
  }

}
