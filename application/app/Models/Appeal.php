<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
  protected $table = 'Appeal';
  protected $primaryKey = 'appealID';

  public function user()
  {
    return $this->hasOne(new User(), 'userID');
  }
}