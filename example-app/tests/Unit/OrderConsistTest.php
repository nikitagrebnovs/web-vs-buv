<?php

namespace Tests\Unit;

use App\Product;
use App\Order;
use PHPUnit\Framework\TestCase;

class OrderConsistTest extends \PHPUnit\Framework\TestCase
{

    public function test_OrderConsist()
    {
        $order = new Order;

        $product = new Product('Fallout 4', 30);
        $product2 = new Product('Call of Duty', 60);

        $order->add($product);
        $order->add($product2);

//        $this->assertEquals(2, count($order->products()));
        $this->assertCount(2, $order->products());

    }

    public function test_OrderDetermine()
    {
        $order = new Order;

        $product3 = new Product('Mafia 3', 59);
        $product4 = new Product('Horizon Zero Down', 61);

        $order->add($product3);
        $order->add($product4);


        $this->assertEquals(120, $order->total());

    }
}
