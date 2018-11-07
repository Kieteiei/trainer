<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $primaryKey = 'payment_id';

    public function customer_user()
    {
        return $this->belongsTo('App\Models\User', 'customer_user_id');
    }

    public function trainer_user()
    {
        return $this->belongsTo('App\Models\User', 'trainer_user_id');
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
