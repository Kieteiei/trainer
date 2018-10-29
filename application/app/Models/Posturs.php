<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posturs extends Model
{
  protected $table = 'Posture';
  protected $primaryKey = 'postureID';

  public function user()
  {
    return $this->hasOne(new User(), 'userID');
  }
}