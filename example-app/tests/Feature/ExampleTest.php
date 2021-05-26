<?php

namespace Tests\Feature;
use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Util\Test;


class ExampleTest extends \PHPUnit\Framework\TestCase
{
    protected $product;
    public function setUp(): void
    {
        $this->product = new Product('Fallout 4', 59);

    }

    public function testAPProductName()
    {

        $this->assertEquals('Fallout 4', $this->product->name());

    }

    function testPorductHasCost()
    {

        $this->assertEquals(59, $this->product->cost());

    }
}
