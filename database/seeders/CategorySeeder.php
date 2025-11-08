<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete all existing categories first to avoid duplicates
        Category::query()->delete();

        $categories = [
            ['id' => 1, 'name' => 'Interactive Multimedia'],
            ['id' => 2, 'name' => 'Software Engineering']
        ];

        foreach ($categories as $category) {
            Category::create([
                'id' => $category['id'],
                'name' => $category['name']
            ]);
        }
    }
}
