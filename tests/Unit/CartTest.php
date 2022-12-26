<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\Cart;
use App\Models\Product\{Brand, Category, Concentration, Product, Size, Type};
use App\Models\Order\Item;

class CartTest extends TestCase
{
    use RefreshDatabase;

    // protected function setUp(): void
    // {
    // }

    public function testMakeCart(): void
    {
        $this->withoutExceptionHandling();
        $cart = new Cart();

        $this->assertInstanceOf(Cart::class, $cart);
    }
}
