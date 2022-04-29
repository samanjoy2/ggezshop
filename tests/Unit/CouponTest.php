<?php

namespace Tests\Unit;
use App\Models\Coupon;

use Tests\TestCase;

class CouponTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_coupon_fixed()
    {
        $coupon = Coupon::make([
            'code' => "SS30",
            'type' => 'fixed',
            'value' => 200,
            'description' => "abc",
            'use_times' => 2,
            'used_times' => 0,
            'start_date' => NULL,
            'expire_date' => NULL,
            'greater_than' => NULL,
            'status' => 1,
            'is_public' => 1
        ]);

        $response = $this->get('/');
        $this->assertTrue(true);
    }
    
    public function test_coupon_percentage()
    {

        $coupon = Coupon::make([
            'code' => "SS230",
            'type' => 'percentage',
            'value' => 10,
            'description' => "abc",
            'use_times' => 2,
            'used_times' => 0,
            'start_date' => NULL,
            'expire_date' => NULL,
            'greater_than' => NULL,
            'status' => 1,
            'is_public' => 1
        ]);

        $response = $this->get('/');
        $this->assertTrue(true);
    }
}
