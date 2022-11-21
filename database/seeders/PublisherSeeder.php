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
                'image' => 'PRH-UK-LOGO1.webp'
            ],
            [
                'name' => 'HarperCollins',
                'address' => 'New York, NY',
                'phone' => '212-207-7000',
                'email' => 'harpercolins@gmail.com',
                'image' => 'rxzdnwsn8vmjrm5tzc4e.webp'
            ]
        ];

        foreach ($publishers as $publisher) {
            Publisher::create($publisher);
        }
    }
}
