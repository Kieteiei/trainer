<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
  protected $table = 'Appeal';
  protected $primaryKey = 'apeal_id';

  public function user()
  {
    return $this->hasOne(new User(), 'user_id');
  }
}