<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'Comment';
    protected $primaryKey = 'comment_id';

    public function comment_user()
    {
        return $this->belongsTo('App\Models\User', 'comment_user_id');
    }

    public static function _create($createArray)
    {
        $model = new Static;

        foreach($createArray as $field => $value)
        {
            $model->$field = $value;
        }

        $model->save();

        return $model;
    }
}
