<?php

require_once __DIR__ . '/Discounts.php';

class Products {
  use Discount;

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
    return $this->description . ' ' . html_entity_decode($this->icon) . ' a soli ' . $this->price . '&euro;';
  }

}
