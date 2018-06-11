<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieutonghop9 extends Model
{
	protected $table = "bieutonghop9";
    
    protected $fillable = [
        'publish_day',
    	'reporter',
            'receiver',
            'year',
            'field_1',
            'field_2',
            'field_3',
            'field_4',
            'field_5',
            'field_6',
            'field_7',
            'field_8',
            'field_9',
            'field_10',
            'field_11',
    ];
}
