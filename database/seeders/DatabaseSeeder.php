<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
        $this->call([ArtistsSeeder::class]);
        $this->call([AlbumsSeeder::class]);
        $this->call([SongsSeeder::class]);
    }
}
