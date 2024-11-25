<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'A young wizard embarks on an adventure.',
            'pages' => 309,
            'image' => '',
            'author_id' => 1,
            'category_id' => 2,
        ]);

        Book::create([
            'title' => 'A Game of Thrones',
            'description' => 'The epic fantasy series begins.',
            'pages' => 694,
            'image' => '',
            'author_id' => 2,
            'category_id' => 2,
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'description' => 'A classic novel of manners.',
            'pages' => 279,
            'image' => '',
            'author_id' => 3,
            'category_id' => 1,
        ]);
    }
}
