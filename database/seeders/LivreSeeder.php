<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LivreSeeder extends Seeder
{
    public function run()
    {
        // Sample data for the livres table
        $livres = [
            [
                'titre' => 'Le Petit Prince',
                'auteur' => 'Antoine de Saint-Exupéry',
                'editeur' => 'Gallimard',
                'dateEdition' => '1943-04-06',
                'NbrExemplaire' => 10,
                'image' => 'petit_prince.jpg',
                'categorie_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => '1984',
                'auteur' => 'George Orwell',
                'editeur' => 'Secker & Warburg',
                'dateEdition' => '1949-06-08',
                'NbrExemplaire' => 15,
                'image' => '1984.jpg',
                'categorie_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample data as needed
        ];
        
        // Insert data into the livres table
        DB::table('livres')->insert($livres);
    }
}
