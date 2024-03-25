<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    public function testGetAllCategories(): void
    {
        $categories = Category::all();
        foreach($categories as $category){
            $result = in_array($category->category, ['Animals', 'Security']);
            $this->assertTrue($result);
        }
    }
}
