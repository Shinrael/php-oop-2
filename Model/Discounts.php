<?php

trait Discount {
  public $discount;
  
  public function getDiscountPrice($discount){
    try{
      if($discount < 0 || $discount > 100){
        throw new Exception('Lo sconto deve essere compreso tra 0 e 100!');
      }
      $discountedPrice = $this->price * (1- $discount/100);
      return $discountedPrice;
    } catch(Exception $e){
      var_dump($e->getMessage());
    }
    
  }
}