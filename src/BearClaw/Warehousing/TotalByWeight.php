<?php
namespace BearClaw\Warehousing;

use BearClaw\Warehousing\Total;

class TotalByWeight implements Total
{
    public function calculate(Product $prod, float $quantity)
    {
        return $quantity * $prod->weight;
    }
}
