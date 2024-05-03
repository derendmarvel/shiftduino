<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feedback::create([
            'name' => 'Rafi Abhista',
            'review' => 'Saya sangat suka dengan produk ini.',
            'rating' => 5
        ]);

        Feedback::create([
            'name' => 'Michael David Sin',
            'review' => 'Saya ingin beli 1',
            'rating' => 5
        ]);

        Feedback::create([
            'name' => 'Nathan Darrell',
            'review' => 'Mantap. Teruskan.',
            'rating' => 4
        ]);
    }
}
