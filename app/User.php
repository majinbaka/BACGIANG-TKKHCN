<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Bieumau1;
use App\Bieumau2;
use App\Bieumau3;
use App\Bieumau4;
use App\Bieumau5;
use App\Bieumau6;
use Carbon\Carbon;
use DB;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'username', 'email', 'password', 'donviname', 'check'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getAllUserHasReported($y){
        $b = Bieumau1::where('reporter_year', $y)->where('check', 1)->pluck('user_id');
        $u = User::whereIn('id', $b);
        return $u;
    }

    public static function lastYear()
    {
        $b1 = Bieumau1::where('check', 1)->max('reporter_year');
        
        return $b1 ? $b1 : 0;
    }

    public function hasReported($year)
    {
        $b1 = Bieumau1::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=',$year)->first();
        if ($b1) return true;
        return false;
    }

    public function createReport($y)
    {
        $b1 = new Bieumau1;$b1->user_id = $this->id;$b1->reporter_year = $y;$b1->save();
        $b2 = new Bieumau2;$b2->user_id = $this->id;$b2->reporter_year = $y;$b2->save();
        $b3 = new Bieumau3;$b3->user_id = $this->id;$b3->reporter_year = $y;$b3->save();
        $b4 = new Bieumau4;$b4->user_id = $this->id;$b4->reporter_year = $y;$b4->save();
        $b5 = new Bieumau5;$b5->user_id = $this->id;$b5->reporter_year = $y;$b5->save();
        $b6 = new Bieumau6;$b6->user_id = $this->id;$b6->reporter_year = $y;$b6->save();
        return ;
    }

    public function bieumauYearFinish()
    {
        $b1 = Bieumau1::where('user_id', $this->id)->where('check', 1)->max('reporter_year');
        
        return $b1 ? $b1 : 0;
    }

    public static function listYear(){
        $years1 = Bieumau1::where('check', 1)->select('reporter_year')->groupby('reporter_year')->get()->toArray();
        $years = array_unique($years1, SORT_DESC);
        $res = [];

        foreach($years as $year)
        {
            $res[] = $year['reporter_year'];
        }
        rsort($res);
        
        return $res;
    }

    public function getAddressU($year){
        $b = Bieumau1::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=', $year)->first();
        if ($b)
        return $b->address;
    return "";
    }

    public function getEName($year){
        $b = Bieumau1::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=', $year)->first();
        if ($b)
        return $b->reporter_element_name;
    return "";
    }

    public function userLastReportedYear($year)
    {
        $last = '';
        $b1 = Bieumau1::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=', $year)->first();
        if ($b1) $last = $b1->publish_day;

        return $last;
    }

    public function getBieumauYear($bieumautype, $year)
    {
        switch ($bieumautype) {
            case 1:
                return Bieumau1::where('user_id', $this->id)->where('check', 1)->whereYear('publish_day','=',$year)->first();
                break;
            
            case 2:
                return Bieumau2::where('user_id', $this->id)->where('check', 1)->whereYear('publish_day','=',$year)->first();
                break;
            
            case 3:
                return Bieumau3::where('user_id', $this->id)->where('check', 1)->whereYear('publish_day','=',$year)->first();
                break;
            
            case 4:
                return Bieumau4::where('user_id', $this->id)->where('check', 1)->whereYear('publish_day','=',$year)->first();
                break;
            
            case 5:
                return Bieumau5::where('user_id', $this->id)->where('check', 1)->whereYear('publish_day','=',$year)->first();
                break;
            
            case 6:
                return Bieumau6::where('user_id', $this->id)->where('check', 1)->whereYear('publish_day','=',$year)->first();
                break;
            
            default:
                return false;
                break;
        }
    }

    public function bieumau1s()
    {
        return $this->hasMany('App\Bieumau1');
    }

    public function bieumau2s()
    {
        return $this->hasMany('App\Bieumau2');
    }

    public function bieumau3s()
    {
        return $this->hasMany('App\Bieumau3');
    }

    public function bieumau4s()
    {
        return $this->hasMany('App\Bieumau4');
    }

    public function bieumau5s()
    {
        return $this->hasMany('App\Bieumau5');
    }

    public function bieumau6s()
    {
        return $this->hasMany('App\Bieumau6');
    }
}
