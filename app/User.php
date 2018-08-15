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
use App\YearReport;
use App\BieuStatus;

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

    public static function getAllUserHasReportedAdmin($y){
        $bieuStatus = BieuStatus::where('year', $y)->where('status','>=', 1)->pluck('user_id');
        $u = User::whereIn('id', $bieuStatus);
        return $u;
    }


    public static function getAllUserHasReportedShow($y){
        $b = YearReport::where('status', 1)->where('type', 1)->where('year', $y)->pluck('user_id');

        $u = User::whereIn('id', $b);
        return $u;
    }

    public function yearShow($year){
        $yr = YearReport::where('year', $year)->where('type', 1)->where('user_id', $this->id)->where('status', 1)->first();

        if ($yr) return true;
        else return false;
    }

    public static function lastYear()
    {
        $b1 = Bieumau1::where('check', 1)->max('reporter_year');
        
        return $b1 ? $b1 : 0;
    }

    public static function lastYearShow()
    {
        $years1 = YearReport::where('status', 1)->where('type', 1)->max('year');

        return $years1 ? $years1 : 0;
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

    public function createReportCopy($old, $y)
    {
        $b1 = Bieumau1::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b1){
        $bc1 = $b1->replicate();$bc1->reporter_year = $y;$bc1->save();
        }else{
            $b1 = new Bieumau1;$b1->user_id = $this->id;$b1->reporter_year = $y;$b1->save();
        }
        $b2 = Bieumau2::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b2){
        $bc2 = $b2->replicate();$bc2->reporter_year = $y;$bc2->save();
        }else{
            $b2 = new Bieumau2;$b2->user_id = $this->id;$b2->reporter_year = $y;$b2->save();
        }
        $b3 = Bieumau3::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b3){
        $bc3 = $b3->replicate();$bc3->reporter_year = $y;$bc3->save();
        }else{
            $b3 = new Bieumau3;$b3->user_id = $this->id;$b3->reporter_year = $y;$b3->save();
        }
        $b4 = Bieumau4::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b4){
        $bc4 = $b4->replicate();$bc4->reporter_year = $y;$bc4->save();
        }else{
            $b4 = new Bieumau4;$b4->user_id = $this->id;$b4->reporter_year = $y;$b4->save();
        }
        $b5 = Bieumau5::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b5){
        $bc5 = $b5->replicate();$bc5->reporter_year = $y;$bc5->save();
        }else{
            $b5 = new Bieumau5;$b5->user_id = $this->id;$b5->reporter_year = $y;$b5->save();
        }
        $b6 = Bieumau6::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b6){
        $bc6 = $b6->replicate();$bc6->reporter_year = $y;$bc6->save();
        }else{
            $b6 = new Bieumau6;$b6->user_id = $this->id;$b6->reporter_year = $y;$b6->save();
        }
        return ;
    }

    public function bieumauYearFinish()
    {
        $b1 = Bieumau1::where('user_id', $this->id)->where('check', 1)->max('reporter_year');
        
        return $b1 ? $b1 : 0;
    }

    public static function listYearShow(){
        $years1 = YearReport::where('status', 1)->where('type', 1)->select('year')->groupby('year')->get()->toArray();
        $years = array_unique($years1, SORT_DESC);
        $res = [];

        foreach($years as $year)
        {
            $res[] = $year['year'];
        }
        rsort($res);
        
        return $res;
    }

    public function bieuStatusCheck($year){
        $bieucheck = BieuStatus::where('year', $year)
            ->where('user_id', $this->id)
            ->first();
        if ($bieucheck){
            if($bieucheck->status == 1)
                return "Đã gửi ngày ".date('d/m/Y H:i:s', strtotime($bieucheck->report_date));
            if($bieucheck->status == 2)
                return "Đã Phê Duyệt";
        }
        return "Đang cập nhật";
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

    public static function listYearAdmin(){
        $bieucheck = BieuStatus::where('status', '>=', 0)->select('year')->groupby('year')->get()->toArray();
        $years = array_unique($bieucheck, SORT_DESC);
        $res = [];

        foreach($years as $year)
        {
            $res[] = $year['year'];
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

    public function getPhone($year){
        $b = Bieumau1::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=', $year)->first();
        if ($b)
        return $b->phone;
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
                return Bieumau1::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=',$year)->first();
                break;
            
            case 2:
                return Bieumau2::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=',$year)->first();
                break;
            
            case 3:
                return Bieumau3::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=',$year)->first();
                break;
            
            case 4:
                return Bieumau4::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=',$year)->first();
                break;
            
            case 5:
                return Bieumau5::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=',$year)->first();
                break;
            
            case 6:
                return Bieumau6::where('user_id', $this->id)->where('check', 1)->where('reporter_year','=',$year)->first();
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
