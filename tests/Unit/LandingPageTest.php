<?php

namespace Tests\Unit;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_landing_page()
    {
        $response = $this->get('/');
        $this->assertTrue(true);
    }
}
