<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Sample data for the categories table
        $categories = [
            [
                'name' => 'Fiction',
                'description' => 'Books that are based on imaginative stories and characters.',
                'image' => 'fiction.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Non-Fiction',
                'description' => 'Books that are based on facts and real events.',
                'image' => 'non_fiction.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Science Fiction',
                'description' => 'Books that explore futuristic and scientific concepts.',
                'image' => 'sci_fi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample data as needed
        ];

        // Insert data into the categories table
        DB::table('categories')->insert($categories);
    }
}
