<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Order\Item;

class ItemTest extends TestCase
{
    use RefreshDatabase;

    public function testMakeOrderItem()
    {
        $this->withoutExceptionHandling();
        $item = Item::factory()->make();

        $this->assertInstanceOf(Item::class, $item);
    }

    public function testCreateOrderItem()
    {
        $this->withoutExceptionHandling();
        $item = Item::factory()->create();

        $this->assertDatabaseHas('items', [
            // 'type_id' => $item->type_id,
            // 'type_name' => $item->type_name,
            'name' => $item->name,
            // 'concentration' => $item->concentration,
            // 'category' => $item->category,
            // 'price' => $item->price,
            'quantity' => $item->quantity,
            // 'subtotal_price' => $item->subtotal_price,
        ]);
    }
}
