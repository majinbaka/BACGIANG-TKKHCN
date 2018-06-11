<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieumau5 extends Model
{
	protected $table = "bieumau5";
    
    protected $fillable = [
        'user_id',
    	'name',
        'publish_day',
        'reporter_year',
        'total',
        'mission_lab_1',
        'mission_lab_2',
        'mission_lab_3',
        'mission_lab_4',
        'mission_lab_5',
        'mission_lab_6',
        'collaborate_1',
        'collaborate_2',
        'collaborate_3',
        'collaborate_4',
        'money_1',
        'money_2',
        'money_3',
        'money_4',
        'money_5',
        'team_out',
        'human_out',
        'team_in',
        'human_in',
        'total_h1',
        'total_h2',
    ];
        public function user()
    {
        return $this->belongsTo('App\User');
    }
}
