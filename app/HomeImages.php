<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeImages extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'next_event_image', 'next_event_image2',
    ];
}
