<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    protected $table = 'Appeal';
    protected $primaryKey = 'apeal_id';

    public function reporter_user()
    {
        return $this->belongsTo('App\Models\User', 'reporter_user_id');
    }

    public function reported_user()
    {
        return $this->belongsTo('App\Models\User', 'reported_user_id');
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
