<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkedWebsite extends Model
{
	protected $table = "linked_websites";
    
    protected $fillable = [
        'title', 'url',
    ];
}
