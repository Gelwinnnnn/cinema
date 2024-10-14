<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'movie_title' => 'Endgame',
                'duration' => '180',
                'release_date' => '2022-08-08',
                'created_at' => now(),
            ],
            [
                'movie_title' => 'Infinity War',
                'duration' => '120',
                'release_date' => '2022-05-08',
                'created_at' => now(),
            ],
            [
                'movie_title' => 'Kuasa Gelap',
                'duration' => '120',
                'release_date' => '2024-10-08',
                'created_at' => now(),
            ],
            [
                'movie_title' => 'Doraemon',
                'duration' => '110',
                'release_date' => '2022-02-02',
                'created_at' => now(),
            ],
            [
                'movie_title' => 'The Nun',
                'duration' => '120',
                'release_date' => '2023-01-08',
                'created_at' => now(),
            ]
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
