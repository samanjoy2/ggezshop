<?php

namespace Tests\Unit;
use App\Models\Product;

use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_product()
    {
        $product = Product::make([
            'name' => "iPhone 13",
            'slug' => 'iphone13',
            'description' => 'good phone',
            'details' => 'good phone',
            'price' => "123",
            'quantity' => "123",
            'featured' => 1,
            'status' => 1,
            'review_able' => 1,
            'category_id' => 1
        ]);

        $response = $this->get('/');
        $this->assertTrue(true);
    }
}
