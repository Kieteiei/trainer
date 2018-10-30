<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $table = 'Photo';
  protected $primaryKey = 'photo_id';

  public function user()
  {
    return $this->hasOne(new User(), 'user_id');
  }
}