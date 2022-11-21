<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishers = [
            [
                'name' => 'Penguin Random House',
                'address' => 'New York, NY',
                'phone' => '212-782-9000',
                'email' => 'penguinrandomhouse@gmail.com',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Penguin_Random_House_Logo.svg/1200px-Penguin_Random_House_Logo.svg.png'
            ],
            [
                'name' => 'HarperCollins',
                'address' => 'New York, NY',
                'phone' => '212-207-7000',
                'email' => 'harpercolins@gmail.com',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/HarperCollins_Logo.svg/1200px-HarperCollins_Logo.svg.png'
            ]
        ];

        foreach ($publishers as $publisher) {
            Publisher::create($publisher);
        }
    }
}
