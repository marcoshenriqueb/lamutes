<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'album_id', 'file',
    ];

    public function album()
    {
        return $this->belongsTo('App\Album');
    }
}
