<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieumau6 extends Model
{
	protected $table = "bieumau6";
    
    protected $fillable = [
        'user_id',
    	'name',
        'publish_day',
        'total',
        'reporter_year',
        'total_award_vn',
        'total_award_vn1',
        'total_award_vn2',
        'total_award_vn3',
        'total_award_vn4',
        'total_award_vn5',
        'total_award_other',
        'total_award_team',
        'total_award_fm',
        'total_award_male',
        'total_award_female',
    ];
        public function user()
    {
        return $this->belongsTo('App\User');
    }
}
