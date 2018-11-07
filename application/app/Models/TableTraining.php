<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableTraining extends Model
{
    protected $table = 'tabletraining';
    protected $primaryKey = 'tabletraining_id';

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
