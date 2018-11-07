<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'training';
    protected $primaryKey = 'training_id';

    public function trainer_user()
    {
        return $this->belongsTo('App\Models\User', 'trainer_user_id');
    }

    public function customer_user()
    {
        return $this->belongsTo('App\Models\User', 'customer_user_id');
    }

    public function practicerecords()
    {
        return $this->hasMany('App\Models\PracticeRecord', 'training_id');
    }

    public function nutrition()
    {
        return $this->hasOne('App\Models\Nutrition', 'training_id');
    }

    public function tabletrainings()
    {
        return $this->hasMany('App\Models\TableTraining', 'training_id');
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
