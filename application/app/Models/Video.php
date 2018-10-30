<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $table = 'linkvideo';
  protected $primaryKey = 'linkvideo_id';

  public function user()
  {
    return $this->hasOne(new User(), 'user_id');
  }
}