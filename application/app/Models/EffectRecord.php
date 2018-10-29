<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EffectRrecord extends Model
{
  protected $table = 'EffectRecord';
  protected $primaryKey = 'erID';

  public function user()
  {
    return $this->hasOne(new User(), 'userID');
  }
}