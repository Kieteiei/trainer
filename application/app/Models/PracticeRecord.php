<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticeRecord extends Model
{
  protected $table = 'PracticeRecord';
  protected $primaryKey = 'practicerecord_id';

  public function user()
  {
    return $this->hasOne(new User(), 'user_id');
  }
}