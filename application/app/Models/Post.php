<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'Post';
    protected $primaryKey = 'post_id';

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

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
