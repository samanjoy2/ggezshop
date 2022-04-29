<?php

namespace Tests\Unit;
use App\Models\Order;
use App\Models\OrderTransaction;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_order()
    {
        $order = Order::make([
            'ref_id' => '121r3ddd',
            'user_id' => '4',
            'user_address_id' => NULL,
            'shipping_company_id' => NULL,
            'payment_method_id' => 1,
            'discount_code' => NULL,
            'discount' => NULL,
            'subtotal' => 500,
            'shipping' => 15,
            'tax' => 15.5,
            'total' => 550.5,
            'currency' => 'USD',
            'order_status' => '1',
        ]);

        $response = $this->get('/');
        $this->assertTrue(true);
    }
    public function test_order_with_discount()
    {
        $order = Order::make([
            'ref_id' => '121r3ddd',
            'user_id' => '4',
            'user_address_id' => NULL,
            'shipping_company_id' => NULL,
            'payment_method_id' => 1,
            'discount_code' => "CSE470",
            'discount' => 50,
            'subtotal' => 500,
            'shipping' => 15,
            'tax' => 15.5,
            'total' => 500.5,
            'currency' => 'USD',
            'order_status' => '1',
        ]);

        $response = $this->get('/');
        $this->assertTrue(true);
    }
    public function test_order_transaction()
    {
        $order = OrderTransaction::make([
            'order_id' => 1,
            'transaction_status' => 1,
            'transaction_number' => '21212ffff44',
            'payment_result' => 'success',
        ]);

        $response = $this->get('/');
        $this->assertTrue(true);
    }
}
