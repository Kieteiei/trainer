<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
  protected $table = 'Nutrition';
  protected $primaryKey = 'nutrition_id';

  public function user()
  {
    return $this->hasOne(new User(), 'user_id');
  }
}