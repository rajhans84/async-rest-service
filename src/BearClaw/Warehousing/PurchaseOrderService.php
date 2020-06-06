<?php
namespace BearClaw\Warehousing;

use Amp\Http\Client\HttpClientBuilder;
use Amp\Http\Client\Request;
use Amp\Loop;
use BearClaw\Warehousing\Product;

class PurchaseOrderService
{
    const ENDPOINT = "https://api.cartoncloud.com.au/CartonCloud_Demo/PurchaseOrders/{id}?version=5&associated=true";
    const AUTHORIZATION = 'Basic aW50ZXJ2aWV3LXRlc3RAY2FydG9uY2xvdWQuY29tLmF1OnRlc3QxMjM0NTY=';

    protected $purchaseOrders = array();

    public function __construct()
    {
        $this->client = HttpClientBuilder::buildDefault();
        $this->request = new Request('', "GET");
        $this->request->setHeader("Authorization", Self::AUTHORIZATION);
    }

    public function loadPurchaseOrderById($id)
    {
        $result = '';
        $uri = str_replace('{id}', $id, self::ENDPOINT);
        $this->request->setUri($uri);
        Loop::run(function () use (&$result) {
            $response = yield $this->client->request($this->request);
            $result = yield $response->getBody()->buffer();
        });
        return $result;
    }

    public function calculateTotals(array $ids)
    {
        $output = [];
        $totals = [];
        foreach ($ids as $key => $id) {
            $purchaseOrder = json_decode($this->loadPurchaseOrderById($id))->data;
            foreach ($purchaseOrder->PurchaseOrderProduct as $pop) {
                $product = new Product((array) $pop->Product);
                $sum = $product->getTotal($pop->unit_quantity_initial);
                if(array_key_exists($product->product_type_id, $totals)){
                    $totals[$product->product_type_id] += $sum;
                } else {
                    $totals[$product->product_type_id] = $sum;
                }
            }
        }
        $i = 0;
        array_walk($totals, function ($total, $key, &$i) use (&$output) {
            $output[$i]['product_type_id'] = $key;
            $output[$i]['total'] = $total;
            $i++;
        }, $i);

        return $output;
    }
}
