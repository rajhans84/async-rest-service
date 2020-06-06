<?php
namespace BearClaw\Warehousing;

use BearClaw\Warehousing\CalculationMethodMapping;

class Product
{
        public function __construct(Array $properties=array()){
        foreach($properties as $key => $value){
          $this->{$key} = $value;
        }
      }

    public function getTotal($quantity)
    {
        $cal = new CalculationMethodMapping();
        $method = $cal->getFormula($this->product_type_id);
        $formula = new $method;
        return $formula->calculate($this, $quantity);
    }
}
