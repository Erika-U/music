<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'data',
        'artist_id',
    ];
 
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag')->withTimestamps();
    }
    public function artist()
    {
        return $this->belongsTo('App\Models\Artist');
    }
}
