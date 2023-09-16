<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArtistsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('artists')->insert([
            'name' => 'Eminem',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('artists')->insert([
            'name' => 'Dua Lipa',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
