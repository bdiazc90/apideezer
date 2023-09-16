<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlbumsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('albums')->insert([
            'title' => 'The Eminem Show',
            'artist_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('albums')->insert([
            'title' => 'Future Nostalgia',
            'artist_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
