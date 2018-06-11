<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieumau3 extends Model
{
	protected $table = "bieumau3";
    
    protected $fillable = [
        'user_id',
    	'name',
        'publish_day',
        'total',
        'reporter_year',
        'pay_improve_khcn',
        'pay_khcn',
        'pay_salary_total',
        'pay_salary',
        'pay_machine',
        'pay_normal',
        'pay_mission',
        'mission_lv1',
        'mission_lv2',
        'mission_lv3',
        'mission_lv4',
        'mission_lv5',
        'pay_lab',
        'pay_maintain',
        'pay_univer',
        'pay_improve_other',
        'pay_other',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
