<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieutonghop4 extends Model
{
	protected $table = "bieutonghop4";
    
    protected $fillable = [
    	'reporter',
            'receiver',
            'year',
            'field_1',
            'field_2',
            'field_3',
            'field_4',
            'field_5',
            'field_6',
            'field_7',
            'field_8',
            'field_9',
            'field_10',
            'field_11',
            'field_12',
            'field_13',
            'field_14',
            'field_15',
            'field_16',
            'field_17',
            'field_18',
            'field_19',
            'field_20',
            'field_21',
            'field_22',
            'field_23',
            'field_24',
            'field_25',
            'field_26',
            'field_27',
            'field_28',
            'field_29',
            'field_30',
            'field_31',
            'field_32',
            'field_33',
            'field_34',
            'field_35',
            'field_36',
            'field_37',
            'field_38',
    ];
    public static function ftmp($p, $none = 0){
        $s = parse_str($p, $out);
        if ($none == 0)
return "<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>
<td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$out[2]."</td>
<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[3]."</td>
<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[4]."</td>
<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[5]."</td>
<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[6]."</td>";
        $res = "";

        for ($i=1; $i <= 6; $i++) {
          if($i != $none) 
          $res .= "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[$i]."</td>";
          else 
            $res .= "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>X</td>";
        }
        return $res;
    }

    public function generateBieu($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop4/temp.tmp', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@f1@', Bieutonghop4::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop4::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop4::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop4::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop4::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop4::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop4::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop4::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop4::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop4::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop4::ftmp($this->field_11), $file);
        $file = str_replace('@f12@', Bieutonghop4::ftmp($this->field_12), $file);
        $file = str_replace('@f13@', Bieutonghop4::ftmp($this->field_13,2), $file);
        $file = str_replace('@f14@', Bieutonghop4::ftmp($this->field_14,2), $file);
        $file = str_replace('@f15@', Bieutonghop4::ftmp($this->field_15,2), $file);
        $file = str_replace('@f16@', Bieutonghop4::ftmp($this->field_16,2), $file);
        $file = str_replace('@f17@', Bieutonghop4::ftmp($this->field_17,2), $file);
        $file = str_replace('@f18@', Bieutonghop4::ftmp($this->field_18,2), $file);
        $file = str_replace('@f19@', Bieutonghop4::ftmp($this->field_19,2), $file);
        $file = str_replace('@f20@', Bieutonghop4::ftmp($this->field_20), $file);
        $file = str_replace('@f21@', Bieutonghop4::ftmp($this->field_21), $file);
        $file = str_replace('@f22@', Bieutonghop4::ftmp($this->field_22), $file);
        $file = str_replace('@f23@', Bieutonghop4::ftmp($this->field_23), $file);
        $file = str_replace('@f24@', Bieutonghop4::ftmp($this->field_24), $file);
        $file = str_replace('@f25@', Bieutonghop4::ftmp($this->field_25), $file);
        $file = str_replace('@f26@', Bieutonghop4::ftmp($this->field_26), $file);
        $file = str_replace('@f27@', Bieutonghop4::ftmp($this->field_27), $file);
        $file = str_replace('@f28@', Bieutonghop4::ftmp($this->field_28), $file);
        $file = str_replace('@f29@', Bieutonghop4::ftmp($this->field_29), $file);
        $file = str_replace('@f30@', Bieutonghop4::ftmp($this->field_30), $file);
        $file = str_replace('@f31@', Bieutonghop4::ftmp($this->field_31), $file);
        $file = str_replace('@f32@', Bieutonghop4::ftmp($this->field_32,2), $file);
        $file = str_replace('@f33@', Bieutonghop4::ftmp($this->field_33,2), $file);
        $file = str_replace('@f34@', Bieutonghop4::ftmp($this->field_34,2), $file);
        $file = str_replace('@f35@', Bieutonghop4::ftmp($this->field_35,2), $file);
        $file = str_replace('@f36@', Bieutonghop4::ftmp($this->field_36,2), $file);
        $file = str_replace('@f37@', Bieutonghop4::ftmp($this->field_37,2), $file);
        $file = str_replace('@f38@', Bieutonghop4::ftmp($this->field_38,2), $file);

        return $file;
    }

    public static function F4Collection($year){
        $b2 = Bieumau4::where('reporter_year', $year)->where('check', 1)->get();
        $ids = [];
        foreach ($b2 as $b) {
            if ($b->total != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b->total != "1=&2=&3=&4=&5=&6="){
                $ids[] = $b->id;
            }
        }
        return $ids;
    }

    public static function F4Sum($year, $value, $column)
    {
        $col = Bieutonghop4::F4Collection($year);
        $b2 = Bieumau4::whereIn('id', $col)->where('check', 1)->get();
        $sum = 0;

        foreach ($b2 as $b) {
            if ($b->{$value} != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b->{$value} != "1=&2=&3=&4=&5=&6=" && $b->{$value} != "1=&3=&4=&5=&6=")
            {
                $s = parse_str($b->{$value}, $out);
                if (array_key_exists($column, $out))
                if (is_numeric($out[$column]))
                    $sum+= ($out[$column]);
            }
        }

        return $sum;
    }

    public static function f1($year, $name){
        $f1 = Bieutonghop4::F4Sum($year, $name, 1);
        $f2 = Bieutonghop4::F4Sum($year, $name, 2);
        $f3 = Bieutonghop4::F4Sum($year, $name, 3);
        $f4 = Bieutonghop4::F4Sum($year, $name, 4);
        $f5 = Bieutonghop4::F4Sum($year, $name, 5);
        $f6 = Bieutonghop4::F4Sum($year, $name, 6);

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5,6=>$f6));
    }

    public static function reBuildBieu($year){
        $b = Bieutonghop4::where('year', $year)->first();
        if (!$b)
            $b = new Bieutonghop4;
        $b->year = $year;
        $b->field_1 = Bieutonghop4::f1($year, 'total');
        $b->field_2 = Bieutonghop4::f1($year, 'subject_lv1');
        $b->field_3 = Bieutonghop4::f1($year, 'subject_lv2');
        $b->field_4 = Bieutonghop4::f1($year, 'subject_lv3');
        $b->field_5 = Bieutonghop4::f1($year, 'subject_lv4');
        $b->field_6 = Bieutonghop4::f1($year, 'subject_lv5');
        $b->field_7 = Bieutonghop4::f1($year, 'subject_lab_1');
        $b->field_8 = Bieutonghop4::f1($year, 'subject_lab_2');
        $b->field_9 = Bieutonghop4::f1($year, 'subject_lab_3');
        $b->field_10 = Bieutonghop4::f1($year, 'subject_lab_4');
        $b->field_11 = Bieutonghop4::f1($year, 'subject_lab_5');
        $b->field_12 = Bieutonghop4::f1($year, 'subject_lab_6');
        $b->field_13 = Bieutonghop4::f1($year, 'subject_money_1');
        $b->field_14 = Bieutonghop4::f1($year, 'subject_money_2');
        $b->field_15 = Bieutonghop4::f1($year, 'subject_money_3');
        $b->field_16 = Bieutonghop4::f1($year, 'subject_money_4');
        $b->field_17 = Bieutonghop4::f1($year, 'subject_money_5');
        $b->field_18 = Bieutonghop4::f1($year, 'subject_money_6');
        $b->field_19 = Bieutonghop4::f1($year, 'subject_money_7');
        $b->field_20 = Bieutonghop4::f1($year, 'total_job');
        $b->field_21 = Bieutonghop4::f1($year, 'total_job_1');
        $b->field_22 = Bieutonghop4::f1($year, 'total_job_2');
        $b->field_23 = Bieutonghop4::f1($year, 'total_job_3');
        $b->field_24 = Bieutonghop4::f1($year, 'total_job_4');
        $b->field_25 = Bieutonghop4::f1($year, 'total_job_5');
        $b->field_26 = Bieutonghop4::f1($year, 'total_lab_1');
        $b->field_27 = Bieutonghop4::f1($year, 'total_lab_2');
        $b->field_28 = Bieutonghop4::f1($year, 'total_lab_3');
        $b->field_29 = Bieutonghop4::f1($year, 'total_lab_4');
        $b->field_30 = Bieutonghop4::f1($year, 'total_lab_5');
        $b->field_31 = Bieutonghop4::f1($year, 'total_lab_6');
        $b->field_32 = Bieutonghop4::f1($year, 'total_money_1');
        $b->field_33 = Bieutonghop4::f1($year, 'total_money_2');
        $b->field_34 = Bieutonghop4::f1($year, 'total_money_3');
        $b->field_35 = Bieutonghop4::f1($year, 'total_money_4');
        $b->field_36 = Bieutonghop4::f1($year, 'total_money_5');
        $b->field_37 = Bieutonghop4::f1($year, 'total_money_6');
        $b->field_38 = Bieutonghop4::f1($year, 'total_money_7');
        $b->save();

        return $b;
    }
}
