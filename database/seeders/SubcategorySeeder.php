<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;
use App\Models\Category;

class SubcategorySeeder extends Seeder
{
    public function run()
    {
        $subcategories = [
            ['name' => 'Mystery', 'category_id' => Category::where('name', 'Fiction')->first()->id],
            ['name' => 'Biography', 'category_id' => Category::where('name', 'Non-fiction')->first()->id],
            ['name' => 'Physics', 'category_id' => Category::where('name', 'Science')->first()->id],
            ['name' => 'World War II', 'category_id' => Category::where('name', 'History')->first()->id],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::create($subcategory);
        }
    }
}
