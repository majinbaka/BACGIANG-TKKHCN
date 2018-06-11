<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieumau4 extends Model
{
	protected $table = "bieumau4";
    
    protected $fillable = [
        'user_id',
    	'name',
      'publish_day',
        'reporter_year',
      'total',
      'subject_lv1',
      'subject_lv2',
      'subject_lv3',
      'subject_lv4',
      'subject_lv5',
      'subject_lab_1',
      'subject_lab_2',
      'subject_lab_3',
      'subject_lab_4',
      'subject_lab_5',
      'subject_lab_6',
      'subject_money_1',
      'subject_money_2',
      'subject_money_3',
      'subject_money_4',
      'subject_money_5',
      'subject_money_6',
      'subject_money_7',
      'total_job',
      'total_job_1',
      'total_job_2',
      'total_job_3',
      'total_job_4',
      'total_job_5',
      'total_lab_1',
      'total_lab_2',
      'total_lab_3',
      'total_lab_4',
      'total_lab_5',
      'total_lab_6',
      'total_money_1',
      'total_money_2',
      'total_money_3',
      'total_money_4',
      'total_money_5',
      'total_money_6',
      'total_money_7',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
