<?php
namespace BearClaw\Warehousing;

use PHPUnit\Framework\TestCase;

/**
 * PurchaseOrderServiceTest
 * @group group
 */
class PurchaseOrderServiceTest extends TestCase
{

    protected function setUp(): void
    {

    }

    /** @test */
    public function test_InstatiateRestServiceProperly()
    {
        $pos = new PurchaseOrderService();
    }

}
