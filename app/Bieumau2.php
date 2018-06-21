<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bieumau1;

class Bieumau2 extends Model
{
	protected $table = "bieumau2";
    
    protected $fillable = [
        'user_id',
    	'name',
        'reporter_year',
        'publish_day',
        'total',
        'female_total',
        'nation_vn',
        'nation_kinh',
        'nation_other',
        'nation_foregin',
        'class_khtn',
        'class_khkt',
        'class_khyd',
        'class_khnn',
        'class_khxh',
        'class_khnv',
        'class_other',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function countF1($y){
        $b = Bieumau2::where('reporter_year', $y)->get();
        $c = 0;
        foreach ($b as $v) {
            if ($v->hasT())
                $c++;
        }
        return $c;
    }

    public function hasT(){
        $s = parse_str($this->total, $out);
        if ($out[1] == 0 || $out[1] == "")
            return false;
        return true;
    }

    public static function ftmp($p){
        $s = parse_str($p, $out);

        return "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[2]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[3]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[4]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[5]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[6]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[7]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[8]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[9]."</td>";

    }

    public function generateBieu2(){
        $file = file_get_contents('tmp/temp_2/b2.tmp', true);
        $b1 = Bieumau1::where('user_id', $this->user_id)->where('reporter_year', $this->reporter_year)->first();
        $file = str_replace('@receiver@', $b1->receiverTmp(), $file);
        $file = str_replace('@reporter_element_name@', $b1->reporter_element_name, $file);
        $file = str_replace('@f1@', Bieumau2::ftmp($this->total), $file);
        $file = str_replace('@f2@', Bieumau2::ftmp($this->female_total), $file);
        $file = str_replace('@f3@', Bieumau2::ftmp($this->nation_vn), $file);
        $file = str_replace('@f4@', Bieumau2::ftmp($this->nation_kinh), $file);
        $file = str_replace('@f5@', Bieumau2::ftmp($this->nation_other), $file);
        $file = str_replace('@f6@', Bieumau2::ftmp($this->nation_foregin), $file);
        $file = str_replace('@f7@', Bieumau2::ftmp($this->class_khtn), $file);
        $file = str_replace('@f8@', Bieumau2::ftmp($this->class_khkt), $file);
        $file = str_replace('@f9@', Bieumau2::ftmp($this->class_khyd), $file);
        $file = str_replace('@f10@', Bieumau2::ftmp($this->class_khnn), $file);
        $file = str_replace('@f11@', Bieumau2::ftmp($this->class_khxh), $file);
        $file = str_replace('@f12@', Bieumau2::ftmp($this->class_khnv), $file);
        $file = str_replace('@f13@', Bieumau2::ftmp($this->class_other), $file);

        return $file;
    }
}
