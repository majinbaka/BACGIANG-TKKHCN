<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
	protected $table = "elements";
    
    protected $fillable = [
        'bieumau1_id',
            'name',
            'leader',
            'address',
            'phone',
            'fax',
            'email',
    ];
}
