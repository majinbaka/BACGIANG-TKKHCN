<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieumau2 extends Model
{
	protected $table = "bieumau2";
    
    protected $fillable = [
        'user_id',
    	'name',
        'reporter_year',
        'publish_day',
        'total',
        'female_total',
        'nation_vn',
        'nation_kinh',
        'nation_other',
        'nation_foregin',
        'class_khtn',
        'class_khkt',
        'class_khyd',
        'class_khnn',
        'class_khxh',
        'class_khnv',
        'class_other',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
