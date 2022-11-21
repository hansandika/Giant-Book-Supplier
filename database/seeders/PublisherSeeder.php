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
                'image' => 'https://www.the-scheme.co.uk/wp-content/uploads/2018/06/PRH-UK-LOGO1.png'
            ],
            [
                'name' => 'HarperCollins',
                'address' => 'New York, NY',
                'phone' => '212-207-7000',
                'email' => 'harpercolins@gmail.com',
                'image' => 'https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/rxzdnwsn8vmjrm5tzc4e'
            ]
        ];

        foreach ($publishers as $publisher) {
            Publisher::create($publisher);
        }
    }
}
