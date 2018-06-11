<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieutonghop11 extends Model
{
	protected $table = "bieutonghop11";
    
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
    ];
}
