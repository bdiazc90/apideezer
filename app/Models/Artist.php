<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model {
    use HasFactory;

    protected $appends = ['type'];
    protected $fillable = ['name'];

    public function songs() {
        return $this->hasManyThrough(Song::class, Album::class);
    }

    public function albums() {
        return $this->hasMany(Album::class);
    }

    public function getTypeAttribute() {
        return 'artist';
    }
}
