<?php
namespace BearClaw\Warehousing;

use BearClaw\Warehousing\CalculationMethodMapping;
use PHPUnit\Framework\TestCase;

/**
 * CalculationMethodTest
 * @group group
 */
class CalculationMethodMappingTest extends TestCase
{
    public $method;
    public $product;
    public $unit_quantity_initial;
    public $formula;
    public $product_type_id;

    protected function setUp(): void
    {
        $this->product = new Product();
        $this->product->weight = "1.20";
        $this->product->volume = "0.60";
        $this->unit_quantity_initial = 10;
    }

    /** @test */
    public function test_TotalCalculationByWeight()
    {
        $this->product_type_id = "1";
        $cal = new CalculationMethodMapping();
        $this->method = $cal->getFormula($this->product_type_id);
        $this->formula = new $this->method;

        var_dump($this->method);
        $this->assertInstanceOf(TotalByWeight::class, $this->formula);
        $actual = $this->unit_quantity_initial * $this->product->weight;
        $expected = $this->formula->calculate($this->product, $this->unit_quantity_initial);
        $this->assertEquals($expected, $actual);
    }

    public function test_TotalCalculationByVolume()
    {
        $this->product_type_id = "2";
        $cal = new CalculationMethodMapping();
        $this->method = $cal->getFormula($this->product_type_id);
        $this->formula = new $this->method;
        $this->assertInstanceOf(TotalByVolume::class, $this->formula);
        $actual = $this->unit_quantity_initial * $this->product->volume;
        $expected = $this->formula->calculate($this->product, $this->unit_quantity_initial);
        $this->assertEquals($expected, $actual);
    }

}
