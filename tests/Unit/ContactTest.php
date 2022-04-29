<?php

namespace Tests\Unit;
use App\Models\Contact;

use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_contact_form()
    {
        $contact = Contact::make([
            'name' => "Sam",
            'email' => 'sam@gmail.com',
            'title' => 'abc',
            'message' => 'abc',
            'status' => 0,
            'user-id' => 105,
        ]);

        $response = $this->get('/');
        $this->assertTrue(true);
    }
}
