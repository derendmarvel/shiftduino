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
            'price' => 300,
            'description' => 'This Shiftduino is a classic variant of our Shiftduino, which can change its LED light as your RPM changes.',
            'launch' => 'Coming Soon',
            'image' => '/images/Shiftduino Product.jpg',
            'image2' => '/images/ShiftDuino Background.jpg',
            'demand' => 0,
        ]);

        Product::create([
            'name' => 'RoboDuino (Blue)',
            'price' => 450,
            'description' => 'This Shiftduino is a blue-painted variant of our Shiftduino, which can change emotions as your RPM changes. This product is still in early stages of development, so stay tuned for more updates! ',
            'launch' => 'Coming Soon',
            'image' => '/images/1.jpg',
            'image2' => '/images/Background-Blue.png',
            'demand' => 0,
        ]);
    }
}
