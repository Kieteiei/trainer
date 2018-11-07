<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticeRecord extends Model
{
    protected $table = 'practicerecord';
    protected $primaryKey = 'practicerecord_id';

    public function user()
    {
        return $this->hasOne(new User(), 'user_id');
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
