<?php

trait Discount {
  public $discount;
  
  public function getDiscountPrice($discount){
    $discountedPrice = $this->price * (1- $discount/100);
    return $discountedPrice;
  }
}