<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=46-Ueij5Q5k',
                'thumbnail' => 'https://pict.sindonews.net/dyn/850/pena/news/2022/04/11/700/739723/profil-6-member-le-sserafim-dan-kontroversinya-jvb.jpg',
                'rating' => 9.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'Double Patty',
                'slug' => 'double-patty',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=apTcyOsQ2rw',
                'thumbnail' => 'https://1.bp.blogspot.com/-lUy88adMwmA/XqpzQbcKouI/AAAAAAAABes/TKknYOgFnLo-MYvCfUaj4Ds7sl_B-xLmwCLcBGAsYHQ/s1600/irene%2Bred%2Bvelvet%2Bmenikah%2Bpacar%2Bsuami.jpg',
                'rating' => 9.9,
                'is_featured' => 0,
            ],
            [
                'name' => 'Pirates of the Caribbean',
                'slug' => 'Pirate-of-the-Caribbean',
                'category' => 'Fantasy',
                'video_url' => 'https://www.youtube.com/watch?v=Hgeu5rhoxxY',
                'thumbnail' => 'hhttps://upload.wikimedia.org/wikipedia/en/5/5e/Pirates_of_the_Caribbean_-_On_Stranger_Tides.png',
                'rating' => 9.9,
                'is_featured' => 0,
            ],
        ];
        Movie::insert($movies);
    }
}
