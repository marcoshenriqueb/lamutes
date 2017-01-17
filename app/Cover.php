<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title', 'subtitle1', 'subtitle1', 'cover_image',
  ];
}
