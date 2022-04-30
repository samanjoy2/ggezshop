<?php

namespace Tests\Unit;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    public function test_admin_login_form()
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
    }
    public function test_admin_can_login()
    {
        $response = $this->post('/admin/login', [
            'username' => 'admin',
            'password' => '123456',
        ]);

        $response->assertStatus(302);
    }
}
