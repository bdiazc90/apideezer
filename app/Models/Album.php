<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model {
    use HasFactory;

    protected $appends = ['type'];
    protected $fillable = ['title', 'artist_id'];

    public function tracks() {
        return $this->hasMany(Song::class);
    }

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function getTypeAttribute() {
        return 'album';
    }
}
