<?php
require_once 'vendor/autoload.php';
use \BearClaw\Warehousing\PurchaseOrderService;
use \BearClaw\Warehousing\TotalsCalculator;

$ids = ['2344', '2345', '2346'];
$service = new PurchaseOrderService();
$result = $service->calculateTotals($ids);

print_r(json_encode($result));
echo "<br>";
$tc = new TotalsCalculator();
$tc->generateReport($ids);
