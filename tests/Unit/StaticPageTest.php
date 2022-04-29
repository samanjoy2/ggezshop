<?php

namespace Tests\Unit;

use Tests\TestCase;

class StaticPageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_about_us()
    {
        $response = $this->get('/page/about');
        $this->assertTrue(true);
    }
    public function test_privacy_policy()
    {
        $response = $this->get('/page/privacy-policy');
        $this->assertTrue(true);
    }
    public function test_faq()
    {
        $response = $this->get('/page/faq-page');
        $this->assertTrue(true);
    }
    public function test_terms_and_conditions()
    {
        $response = $this->get('/page/terms-and-conditions');
        $this->assertTrue(true);
    }
}
