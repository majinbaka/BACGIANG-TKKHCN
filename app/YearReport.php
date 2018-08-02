<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearReport extends Model
{
	protected $table = "year_reports";
    
    protected $fillable = [
        'year', 'user_id', 'status', 'type'
    ];

    public static function yearShowType($year, $type){
        $yr = YearReport::where('year', $year)->where('type', $type)->where('status', 1)->first();

        if ($yr) return true;
        else return false;
    }
}
