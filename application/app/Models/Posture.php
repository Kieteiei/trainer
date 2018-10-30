<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posture extends Model
{
  protected $table = 'Posture';
  protected $primaryKey = 'posture_id';

  public function user()
  {
    return $this->hasOne(new User(), 'user_id');
  }
}