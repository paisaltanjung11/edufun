<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete all existing authors first to avoid duplicates
        Author::query()->delete();

        $authors = [
            ['id' => 1, 'name' => 'Paisal Tanjung', 'specialist' => 'Interactive Multimedia Specialist'],
            ['id' => 2, 'name' => 'Yachae', 'specialist' => 'Software Engineering Specialist']
        ];

        foreach ($authors as $author) {
            Author::create([
                'id' => $author['id'],
                'name' => $author['name'],
                'specialist' => $author['specialist']
            ]);
        }
    }
}
