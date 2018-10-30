<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EffectRrecord extends Model
{
  protected $table = 'EffectRecord';
  protected $primaryKey = 'effectrecord_id';

  public function user()
  {
    return $this->hasOne(new User(), 'user_id');
  }
}