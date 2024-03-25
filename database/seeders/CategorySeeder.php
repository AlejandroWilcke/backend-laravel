<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['category' => 'Animals', 'created_at' => now(), 'updated_at' => now()],
            ['category' => 'Security', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
