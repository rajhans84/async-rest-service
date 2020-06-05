<?php
namespace BearClaw\Warehousing;

interface Total
{
    public function calculate(Product $prod, float $quantity);
}
