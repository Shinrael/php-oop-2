<?php

class Categories extends Products{

  public $nameCategory;
  
  public function __construct(string $_id, string $_name, float $_price, string $_image, string $_icon, string $_type, string $_nameCategory){
    
    parent ::__construct($_id, $_name, $_price, $_image, $_icon, $_type);

    $this->nameCategory = $_nameCategory;

  }

}