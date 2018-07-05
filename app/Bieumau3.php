<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieumau3 extends Model
{
	protected $table = "bieumau3";
    
    protected $fillable = [
        'user_id',
    	'name',
        'check',
        'publish_day',
        'total',
        'reporter_year',
        'pay_improve_khcn',
        'pay_khcn',
        'pay_salary_total',
        'pay_salary',
        'pay_machine',
        'pay_normal',
        'pay_mission',
        'mission_lv1',
        'mission_lv2',
        'mission_lv3',
        'mission_lv4',
        'mission_lv5',
        'pay_lab',
        'pay_maintain',
        'pay_univer',
        'pay_improve_other',
        'pay_other',
    ];

    public static function ftmp($p){
        $s = parse_str($p, $out);
        
        return "<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td><td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[2]."</td><td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[3]."</td><td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[4]."</td><td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[5]."</td>";
    }

    public function generateBieu3(){
        $file = file_get_contents('tmp/temp_3/b3.tmp', true);
        $b1 = Bieumau1::where('user_id', $this->user_id)->where('reporter_year', $this->reporter_year)->first();
        $file = str_replace('@receiver@', $b1->receiverTmp(), $file);
        $file = str_replace('@reporter_element_name@', $b1->reporter_element_name, $file);
        $file = str_replace('@f1@', Bieumau3::ftmp($this->total), $file);
        $file = str_replace('@f2@', Bieumau3::ftmp($this->pay_improve_khcn), $file);
        $file = str_replace('@f3@', Bieumau3::ftmp($this->pay_khcn), $file);
        $file = str_replace('@f4@', Bieumau3::ftmp($this->pay_salary_total), $file);
        $file = str_replace('@f5@', Bieumau3::ftmp($this->pay_salary), $file);
        $file = str_replace('@f6@', Bieumau3::ftmp($this->pay_machine), $file);
        $file = str_replace('@f7@', Bieumau3::ftmp($this->pay_normal), $file);
        $file = str_replace('@f8@', Bieumau3::ftmp($this->pay_mission), $file);
        $file = str_replace('@f9@', Bieumau3::ftmp($this->mission_lv1), $file);
        $file = str_replace('@f10@', Bieumau3::ftmp($this->mission_lv2), $file);
        $file = str_replace('@f11@', Bieumau3::ftmp($this->mission_lv3), $file);
        $file = str_replace('@f12@', Bieumau3::ftmp($this->mission_lv4), $file);
        $file = str_replace('@f13@', Bieumau3::ftmp($this->mission_lv5), $file);
        $file = str_replace('@f14@', Bieumau3::ftmp($this->pay_lab), $file);
        $file = str_replace('@f15@', Bieumau3::ftmp($this->pay_maintain), $file);
        $file = str_replace('@f16@', Bieumau3::ftmp($this->pay_univer), $file);
        $file = str_replace('@f17@', Bieumau3::ftmp($this->pay_improve_other), $file);
        $file = str_replace('@f18@', Bieumau3::ftmp($this->pay_other), $file);

        return $file;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
