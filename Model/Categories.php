<?php

class Categories extends Products{

  public $nameCategory;
  
  public function __construct(string $_id, string $_name, float $_price, string $_nameCategory){
    
    parent ::__construct($_id, $_name, $_price);

    $this->nameCategory = $_nameCategory;

  }

}