<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $table = 'linkvedeo';
  protected $primaryKey = 'linkvedeoID';

  public function user()
  {
    return $this->hasOne(new User(), 'userID');
  }
}