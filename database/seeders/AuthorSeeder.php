<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'J.K. Rowling', 'birthday' => '1965-07-31']);
        Author::create(['name' => 'George R.R. Martin', 'birthday' => '1948-09-20']);
        Author::create(['name' => 'Jane Austen', 'birthday' => '1775-12-16']);
        Author::create(['name' => 'Jules Verne', 'birthday' => '1828-02-08']);
    }
}
