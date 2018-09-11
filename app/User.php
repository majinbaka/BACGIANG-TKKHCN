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
        'name', 'username', 'email', 'password', 'donviname', 'check','address','phone','city', 'role'
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

    public function createReportCopy($old, $y)
    {
        $b1 = Bieumau1::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b1){
        $bc1 = $b1->replicate();$bc1->reporter_year = $y;$bc1->save();
        }else{
            $b1 = new Bieumau1;
            $b1->user_id = $this->id;
            $b1->reporter_year = $y;
            $b1->reporter_element_name = $this->donviname;
            $b1->address = $this->address;
            $b1->city = $this->city;
            $b1->phone = $this->phone;
            $b1->email = $this->email;
            $b1->save();
        }
        $b2 = Bieumau2::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b2){
        $bc2 = $b2->replicate();$bc2->reporter_year = $y;$bc2->save();
        }else{
            $b2 = new Bieumau2;
            $b2->user_id = $this->id;
            $b2->reporter_year = $y;
            $b2->total = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->female_total = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->nation_vn = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->nation_kinh = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->nation_other = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->nation_foregin = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->class_khtn = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->class_khkt = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->class_khyd = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->class_khnn = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->class_khxh = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->class_khnv = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->class_other = "1=&2=&3=&4=&5=&6=&7=&8=&9=";
            $b2->save();
        }
        $b3 = Bieumau3::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b3){
        $bc3 = $b3->replicate();$bc3->reporter_year = $y;$bc3->save();
        }else{
            $b3 = new Bieumau3;
            $b3->user_id = $this->id;
            $b3->reporter_year = $y;
            $b3->total = "1=&2=&3=&4=&5=";
            $b3->pay_improve_khcn = "1=&2=&3=&4=&5=";
            $b3->pay_khcn = "1=&2=&3=&4=&5=";
            $b3->pay_salary_total = "1=&2=&3=&4=&5=";
            $b3->pay_salary = "1=&2=&3=&4=&5=";
            $b3->pay_machine = "1=&2=&3=&4=&5=";
            $b3->pay_normal = "1=&2=&3=&4=&5=";
            $b3->pay_mission = "1=&2=&3=&4=&5=";
            $b3->mission_lv1 = "1=&2=&3=&4=&5=";
            $b3->mission_lv2 = "1=&2=&3=&4=&5=";
            $b3->mission_lv3 = "1=&2=&3=&4=&5=";
            $b3->mission_lv4 = "1=&2=&3=&4=&5=";
            $b3->mission_lv5 = "1=&2=&3=&4=&5=";
            $b3->pay_lab = "1=&2=&3=&4=&5=";
            $b3->pay_maintain = "1=&2=&3=&4=&5=";
            $b3->pay_univer = "1=&2=&3=&4=&5=";
            $b3->pay_improve_other = "1=&2=&3=&4=&5=";
            $b3->pay_other = "1=&2=&3=&4=&5=";
            $b3->save();
        }
        $b4 = Bieumau4::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b4){
        $bc4 = $b4->replicate();$bc4->reporter_year = $y;$bc4->save();
        }else{
            $b4 = new Bieumau4;
            $b4->user_id = $this->id;
            $b4->reporter_year = $y;
            $b4->total = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lv1 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lv2 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lv3 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lv4 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lv5 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lab_1 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lab_2 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lab_3 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lab_4 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lab_5 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_lab_6 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_money_1 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_money_2 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_money_3 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_money_4 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_money_5 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_money_6 = "1=&2=&3=&4=&5=&6=";
            $b4->subject_money_7 = "1=&2=&3=&4=&5=&6=";
            $b4->total_job = "1=&2=&3=&4=&5=&6=";
            $b4->total_job_1 = "1=&2=&3=&4=&5=&6=";
            $b4->total_job_2 = "1=&2=&3=&4=&5=&6=";
            $b4->total_job_3 = "1=&2=&3=&4=&5=&6=";
            $b4->total_job_4 = "1=&2=&3=&4=&5=&6=";
            $b4->total_job_5 = "1=&2=&3=&4=&5=&6=";
            $b4->total_lab_1 = "1=&2=&3=&4=&5=&6=";
            $b4->total_lab_2 = "1=&2=&3=&4=&5=&6=";
            $b4->total_lab_3 = "1=&2=&3=&4=&5=&6=";
            $b4->total_lab_4 = "1=&2=&3=&4=&5=&6=";
            $b4->total_lab_5 = "1=&2=&3=&4=&5=&6=";
            $b4->total_lab_6 = "1=&2=&3=&4=&5=&6=";
            $b4->total_money_1 = "1=&2=&3=&4=&5=&6=";
            $b4->total_money_2 = "1=&2=&3=&4=&5=&6=";
            $b4->total_money_3 = "1=&2=&3=&4=&5=&6=";
            $b4->total_money_4 = "1=&2=&3=&4=&5=&6=";
            $b4->total_money_5 = "1=&2=&3=&4=&5=&6=";
            $b4->total_money_6 = "1=&2=&3=&4=&5=&6=";
            $b4->total_money_7 = "1=&2=&3=&4=&5=&6=";
            $b4->save();
        }
        $b5 = Bieumau5::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b5){
        $bc5 = $b5->replicate();$bc5->reporter_year = $y;$bc5->save();
        }else{
            $b5 = new Bieumau5;
            $b5->user_id = $this->id;
            $b5->reporter_year = $y;
            $b5->total = "1=&2=";
            $b5->mission_lab_1 = "1=&2=";
            $b5->mission_lab_2 = "1=&2=";
            $b5->mission_lab_3 = "1=&2=";
            $b5->mission_lab_4 = "1=&2=";
            $b5->mission_lab_5 = "1=&2=";
            $b5->mission_lab_6 = "1=&2=";
            $b5->collaborate_1 = "1=&2=";
            $b5->collaborate_2 = "1=&2=";
            $b5->collaborate_3 = "1=&2=";
            $b5->collaborate_4 = "1=&2=";
            $b5->money_1 = "1=";
            $b5->money_2 = "1=";
            $b5->money_3 = "1=";
            $b5->money_4 = "1=";
            $b5->money_5 = "1=";
            $b5->team_out = "1=&2=";
            $b5->human_out = "1=";
            $b5->team_in = "1=&2=";
            $b5->human_in = "1=";
            $b5->total_h1 = "1=";
            $b5->total_h2 = "1=";
            $b5->save();
        }
        $b6 = Bieumau6::where('user_id', $this->id)->where('reporter_year', $old)->first();
        if($b6){
        $bc6 = $b6->replicate();$bc6->reporter_year = $y;$bc6->save();
        }else{
            $b6 = new Bieumau6;
            $b6->user_id = $this->id;
            $b6->reporter_year = $y;
            $b6->total = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_vn = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_vn1 = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_vn2 = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_vn3 = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_vn4 = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_vn5 = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_other = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_team = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_fm = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_male = "1=&2=&3=&4=&5=&6=&7=";
            $b6->total_award_female = "1=&2=&3=&4=&5=&6=&7=";
            $b6->save();
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

    public function listYearU(){
        $years1 = Bieumau1::where('check', 1)->where('user_id', $this->id)->select('reporter_year')->groupby('reporter_year')->get()->toArray();
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
