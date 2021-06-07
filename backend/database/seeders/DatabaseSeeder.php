<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArtistsTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}
