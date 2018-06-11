<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
	protected $table = "technologies";
    
    protected $fillable = [
        'bieumau1_id',
            'name',
            'year',
            'code',
            'country',
            'use_year',
            'money',
    ];
}
