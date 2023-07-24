<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    private $categories = [
        [
            "name" => 'Articoli per la casa'
        ],
        [
            "name" => 'Articoli da regalo',
            "description" => 'Bla bla bla'
        ]
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // foreach($this->categories as $category) {
        //     //.... INSERT INTO....
        //     Category::create($category);
        // }
        Category::factory(10)->create();
    }
}
