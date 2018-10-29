<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $table = 'Comment';
  protected $primaryKey = 'commentID';

  public function user()
  {
    return $this->hasOne(new User(), 'userID');
  }
}