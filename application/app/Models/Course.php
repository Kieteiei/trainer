<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'Course';
    protected $primaryKey = 'course_id';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
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
