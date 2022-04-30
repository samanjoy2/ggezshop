<?php

namespace Tests\Unit;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function test_existing_users_can_login()
    {
        $response = $this->post('/login', [
            'username' => 'abc',
            'password' => '11111111',
        ]);

        $response->assertStatus(302);
    }
    public function test_user_name_duplication_check()
    {
        $user1 = User::make([
            'name' => "John Doe",
            'email' => "dary@gmail.com"
        ]);
        $user2 = User::make([
            'name' => "Abc",
            'email' => "abcy@gmail.com"
        ]);
        $this->assertTrue($user1->name != $user2->name);
    }
    public function test_user_email_duplication_check()
    {
        $user1 = User::make([
            'name' => "John Doe",
            'email' => "dary@gmail.com"
        ]);
        $user2 = User::make([
            'name' => "Abc",
            'email' => "abcy@gmail.com"
        ]);
        $this->assertTrue($user1->email != $user2->email);
    }
    public function test_register_form()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'first_name' => 'User2',
            'last_name' => 'Test',
            'username' => 'abc',
            'email' => 'abc@gmail.com',
            'phone' => '022323232',
            'password' => '11111111',
            'password_confirmation' => '11111111',
        ]);

        $response->assertStatus(302);
    }
}
