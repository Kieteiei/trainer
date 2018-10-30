<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $table = 'Course';
  protected $primaryKey = 'course_id';

  public function user()
  {
    return $this->hasOne(new User(), 'user_id');
  }
}