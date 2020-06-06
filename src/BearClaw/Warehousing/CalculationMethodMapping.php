<?php
namespace BearClaw\Warehousing;

class CalculationMethodMapping
{
    public $mapping = array(
        "1" => "TotalByWeight",
        "2" => "TotalByVolume",
        "3" => "TotalByWeight",
    );

    public function getFormula($product_type_id)
    {
        $className = $this->mapping[$product_type_id] ?? 'TotalByWeight';
        $qualifiedClassName = "BearClaw\\Warehousing\\{$className}";
        return $qualifiedClassName;
    }

    public function setMapping($product_type_id, $className)
    {
        $this->mapping[$key] = $className;
    }
}
