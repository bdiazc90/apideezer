<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SongsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('songs')->insert([
            'album_id' => 1,
            'title' => 'Without Me',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('songs')->insert([
            'album_id' => 1,
            'title' => 'Sing For The Moment',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('songs')->insert([
            'album_id' => 1,
            'title' => 'Cleanin Out My Closet',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('songs')->insert([
            'album_id' => 2,
            'title' => 'Love Again',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('songs')->insert([
            'album_id' => 2,
            'title' => 'Levitating',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('songs')->insert([
            'album_id' => 2,
            'title' => 'Dont Start Now',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
