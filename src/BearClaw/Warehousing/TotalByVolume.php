<?php
namespace BearClaw\Warehousing;

use BearClaw\Warehousing\Total;

class TotalByVolume implements Total
{
    public function calculate(Product $prod, float $quantity)
    {
        return $quantity * $prod->volume;
    }
}
