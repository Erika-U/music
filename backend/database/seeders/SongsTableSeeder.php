<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Song::create([
                'title' => 'title' . $i,
                'data' => 'data' . $i,
                'artist_id' => $i,
            ]);
        }
    }
}
