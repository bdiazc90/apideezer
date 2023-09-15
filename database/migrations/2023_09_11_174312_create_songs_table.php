<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Eloquent\SoftDeletes;

class CreateSongsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('album_id');
            $table->string('title', 500);
            $table->timestamps();
            $table->softDeletes();
            // Indexes:
            $table->foreign('album_id')->references('id')->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('songs');
    }
}
