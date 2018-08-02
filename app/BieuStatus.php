<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BieuStatus extends Model
{
	protected $table = "bieu_status";
    
    protected $fillable = [
        'year', 'user_id', 'status', 'report_date'
    ];
}
