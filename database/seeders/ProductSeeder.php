<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Classic Shiftduino',
            'price' => 450,
            'description' => 'This Shiftduino is a classic variant of our Shiftduino, which can change LED light as your RPM changes.',
            'image' => '/images/Shiftduino.jpg',
            'image2' => '/images/Background-1.png',
            'demand' => 0,
        ]);

        Product::create([
            'name' => 'RoboDuino (Blue)',
            'price' => 600,
            'description' => 'This Shiftduino is a blue-painted variant of our Shiftduino, which can change emotions as your RPM changes.',
            'image' => '/images/1.jpg',
            'image2' => '/images/Background-Blue.png',
            'demand' => 0,
        ]);

        Product::create([
            'name' => 'RoboDuino (Orange)',
            'price' => 600,
            'description' => 'This Shiftduino is an orange-painted variant of our Shiftduino, which can change emotions as your RPM changes.',
            'image' => '/images/2.jpg',
            'image2' => '/images/Background-Orange.png',
            'demand' => 0,
        ]);

        Product::create([
            'name' => 'RoboDuino (Green)',
            'price' => 600,
            'description' => 'This Shiftduino is a green-painted variant of our Shiftduino, which can change emotions as your RPM changes.',
            'image' => '/images/3.jpg',
            'image2' => '/images/Background-Green.png',
            'demand' => 0,
        ]);
    }
}
