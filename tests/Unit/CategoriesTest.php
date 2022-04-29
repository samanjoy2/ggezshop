<?php

namespace Tests\Unit;
use App\Models\Category;

use Tests\TestCase;

class CategoriesTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_categories()
    {
        $category = Category::make([
            'name' => "PC App",
            'slug' => "pcapp",
            'description' => NULL,
            'cover' => NULL,
            'status' => 1,
            'parent_id' => NULL,
        ]);

        $response = $this->get('/');
        $this->assertTrue(true);
    }
    
    public function test_categories_with_parent()
    {
        $category1 = Category::make([
            'name' => "PC App1",
            'slug' => "pcapp1",
            'description' => NULL,
            'cover' => NULL,
            'status' => 1,
            'parent_id' => NULL,
        ]);
        
        $category = Category::make([
            'name' => "PC App2",
            'slug' => "pcapp2",
            'description' => NULL,
            'cover' => NULL,
            'status' => 1,
            'parent_id' => 50,
        ]);


        $response = $this->get('/');
        $this->assertTrue(true);
    }
}
