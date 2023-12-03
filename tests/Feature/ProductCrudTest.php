<?php

use App\Models\Product;

test('user can get list of products', function () {

    $product = Product::factory()->create();

    // dd($product->toArray());

    $response = $this->get('/api/products');

    $response->assertStatus(200)
    ->assertJson([
        'data' => [
            [
                'id' => $product->id,
                'name' => $product->name
            ]
        ]
    ]);
})->only();
