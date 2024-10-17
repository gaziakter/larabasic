<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Fiction'],
            ['name' => 'Non-fiction'],
            ['name' => 'Science'],
            ['name' => 'History'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
