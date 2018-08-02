<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieumau5 extends Model
{
	protected $table = "bieumau5";
    
    protected $fillable = [
        'user_id',
        'check',
    	'name',
        'publish_day',
        'reporter_year',
        'total',
        'mission_lab_1',
        'mission_lab_2',
        'mission_lab_3',
        'mission_lab_4',
        'mission_lab_5',
        'mission_lab_6',
        'collaborate_1',
        'collaborate_2',
        'collaborate_3',
        'collaborate_4',
        'money_1',
        'money_2',
        'money_3',
        'money_4',
        'money_5',
        'team_out',
        'human_out',
        'team_in',
        'human_in',
        'total_h1',
        'total_h2',
    ];

    public static function ftmp($p, $none = 0){
        $s = parse_str($p, $out);
        if ($none == 0)
return "<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>
<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$out[2]."</td>";
        $res = "";

        for ($i=1; $i <= 2; $i++) {
          if($i != $none) 
          $res .= "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>";
          else 
            $res .= "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>X</td>";
        }
        return $res;
    }

    public function generateBieu5(){
        $file = file_get_contents('tmp/temp_5/b5.tmp', true);
        $b1 = Bieumau1::where('user_id', $this->user_id)->where('reporter_year', $this->reporter_year)->first();
        $file = str_replace('@receiver@', $b1->receiverTmp(), $file);
        $file = str_replace('@reporter_element_name@', $b1->reporter_element_name, $file);
        $file = str_replace('@year@', $this->reporter_year, $file);
        $file = str_replace('@f1@', Bieumau5::ftmp($this->total), $file);
        $file = str_replace('@f2@', Bieumau5::ftmp($this->mission_lab_1), $file);
        $file = str_replace('@f3@', Bieumau5::ftmp($this->mission_lab_2), $file);
        $file = str_replace('@f4@', Bieumau5::ftmp($this->mission_lab_3), $file);
        $file = str_replace('@f5@', Bieumau5::ftmp($this->mission_lab_4), $file);
        $file = str_replace('@f6@', Bieumau5::ftmp($this->mission_lab_5), $file);
        $file = str_replace('@f7@', Bieumau5::ftmp($this->mission_lab_6), $file);
        $file = str_replace('@f8@', Bieumau5::ftmp($this->collaborate_1), $file);
        $file = str_replace('@f9@', Bieumau5::ftmp($this->collaborate_2), $file);
        $file = str_replace('@f10@', Bieumau5::ftmp($this->collaborate_3), $file);
        $file = str_replace('@f11@', Bieumau5::ftmp($this->collaborate_4), $file);
        $file = str_replace('@f12@', Bieumau5::ftmp($this->money_1,1), $file);
        $file = str_replace('@f13@', Bieumau5::ftmp($this->money_2,1), $file);
        $file = str_replace('@f14@', Bieumau5::ftmp($this->money_3,1), $file);
        $file = str_replace('@f15@', Bieumau5::ftmp($this->money_4,1), $file);
        $file = str_replace('@f16@', Bieumau5::ftmp($this->money_5,1), $file);
        $file = str_replace('@f17@', Bieumau5::ftmp($this->team_out), $file);
        $file = str_replace('@f18@', Bieumau5::ftmp($this->human_out,2), $file);
        $file = str_replace('@f19@', Bieumau5::ftmp($this->team_in), $file);
        $file = str_replace('@f20@', Bieumau5::ftmp($this->human_in,2), $file);
        $file = str_replace('@f21@', Bieumau5::ftmp($this->total_h1,2), $file);
        $file = str_replace('@f22@', Bieumau5::ftmp($this->total_h2,2), $file);
        
        return $file;
    }

    public function generateBieuX(){
        $file = file_get_contents('tmp/temp_5/b5print.tmp', true);
        $b1 = Bieumau1::where('user_id', $this->user_id)->where('reporter_year', $this->reporter_year)->first();
        $file = str_replace('@receiver@', $b1->receiverTmp(), $file);
        $file = str_replace('@reporter_element_name@', $b1->reporter_element_name, $file);
        $file = str_replace('@year@', $this->reporter_year, $file);
        $file = str_replace('@f1@', Bieumau5::ftmp($this->total), $file);
        $file = str_replace('@f2@', Bieumau5::ftmp($this->mission_lab_1), $file);
        $file = str_replace('@f3@', Bieumau5::ftmp($this->mission_lab_2), $file);
        $file = str_replace('@f4@', Bieumau5::ftmp($this->mission_lab_3), $file);
        $file = str_replace('@f5@', Bieumau5::ftmp($this->mission_lab_4), $file);
        $file = str_replace('@f6@', Bieumau5::ftmp($this->mission_lab_5), $file);
        $file = str_replace('@f7@', Bieumau5::ftmp($this->mission_lab_6), $file);
        $file = str_replace('@f8@', Bieumau5::ftmp($this->collaborate_1), $file);
        $file = str_replace('@f9@', Bieumau5::ftmp($this->collaborate_2), $file);
        $file = str_replace('@f10@', Bieumau5::ftmp($this->collaborate_3), $file);
        $file = str_replace('@f11@', Bieumau5::ftmp($this->collaborate_4), $file);
        $file = str_replace('@f12@', Bieumau5::ftmp($this->money_1,1), $file);
        $file = str_replace('@f13@', Bieumau5::ftmp($this->money_2,1), $file);
        $file = str_replace('@f14@', Bieumau5::ftmp($this->money_3,1), $file);
        $file = str_replace('@f15@', Bieumau5::ftmp($this->money_4,1), $file);
        $file = str_replace('@f16@', Bieumau5::ftmp($this->money_5,1), $file);
        $file = str_replace('@f17@', Bieumau5::ftmp($this->team_out), $file);
        $file = str_replace('@f18@', Bieumau5::ftmp($this->human_out,2), $file);
        $file = str_replace('@f19@', Bieumau5::ftmp($this->team_in), $file);
        $file = str_replace('@f20@', Bieumau5::ftmp($this->human_in,2), $file);
        $file = str_replace('@f21@', Bieumau5::ftmp($this->total_h1,2), $file);
        $file = str_replace('@f22@', Bieumau5::ftmp($this->total_h2,2), $file);
        
        return $file;
    }

        public function user()
    {
        return $this->belongsTo('App\User');
    }
}
