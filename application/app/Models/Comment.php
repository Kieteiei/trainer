<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $table = 'Comment';
  protected $primaryKey = 'comment_id';

  public function user()
  {
    return $this->hasOne(new User(), 'user_id');
  }
}