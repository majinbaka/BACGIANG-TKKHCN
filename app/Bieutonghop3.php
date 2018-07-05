<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieutonghop3 extends Model
{
	protected $table = "bieutonghop3";
    
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
    ];

    public static function ftmp($p){
        $s = parse_str($p, $out);

        return "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[2]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[3]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[4]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[5]."</td>";

    }

    public function generateBieu($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop3/temp.tmp', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@f1@', Bieutonghop3::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop3::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop3::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop3::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop3::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop3::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop3::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop3::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop3::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop3::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop3::ftmp($this->field_11), $file);
        $file = str_replace('@f12@', Bieutonghop3::ftmp($this->field_12), $file);
        $file = str_replace('@f13@', Bieutonghop3::ftmp($this->field_13), $file);
        $file = str_replace('@f14@', Bieutonghop3::ftmp($this->field_14), $file);
        $file = str_replace('@f15@', Bieutonghop3::ftmp($this->field_15), $file);
        $file = str_replace('@f16@', Bieutonghop3::ftmp($this->field_16), $file);
        $file = str_replace('@f17@', Bieutonghop3::ftmp($this->field_17), $file);
        $file = str_replace('@f18@', Bieutonghop3::ftmp($this->field_18), $file);

        return $file;
    }

    public static function F3Collection($year){
        $b2 = Bieumau3::where('reporter_year', $year)->where('check', 1)->get();
        $ids = [];
        foreach ($b2 as $b) {
            if ($b->total != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b->total != "1=&2=&3=&4=&5="){
                $ids[] = $b->id;
            }
        }
        return $ids;
    }

    public static function F3Sum($year, $value, $column)
    {
        $col = Bieutonghop3::F3Collection($year);
        $b2 = Bieumau3::whereIn('id', $col)->where('check', 1)->get();
        $sum = 0;

        foreach ($b2 as $b) {
            if ($b->{$value} != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b->{$value} != "1=&2=&3=&4=&5=")
            {
                $s = parse_str($b->{$value}, $out);
                if (is_numeric($out[$column]))
                $sum+= ($out[$column]);
            }
        }

        if ($sum != 0 && is_float($sum))
            return number_format($sum, 3, '.', ',');
        else
            return $sum;
    }

    public static function f1($year, $name){
        $f1 = Bieutonghop3::F3Sum($year, $name, 1);
        $f2 = Bieutonghop3::F3Sum($year, $name, 2);
        $f3 = Bieutonghop3::F3Sum($year, $name, 3);
        $f4 = Bieutonghop3::F3Sum($year, $name, 4);
        $f5 = Bieutonghop3::F3Sum($year, $name, 5);

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5));
    }

    public static function reBuildBieu($year){
        $b = Bieutonghop3::where('year', $year)->first();
        if (!$b)
            $b = new Bieutonghop3;
        $b->year = $year;
        $b->field_1 = Bieutonghop3::f1($year, 'total');
        $b->field_2 = Bieutonghop3::f1($year, 'pay_improve_khcn');
        $b->field_3 = Bieutonghop3::f1($year, 'pay_khcn');
        $b->field_4 = Bieutonghop3::f1($year, 'pay_salary_total');
        $b->field_5 = Bieutonghop3::f1($year, 'pay_salary');
        $b->field_6 = Bieutonghop3::f1($year, 'pay_machine');
        $b->field_7 = Bieutonghop3::f1($year, 'pay_normal');
        $b->field_8 = Bieutonghop3::f1($year, 'pay_mission');
        $b->field_9 = Bieutonghop3::f1($year, 'mission_lv1');
        $b->field_10 = Bieutonghop3::f1($year, 'mission_lv2');
        $b->field_11 = Bieutonghop3::f1($year, 'mission_lv3');
        $b->field_12 = Bieutonghop3::f1($year, 'mission_lv4');
        $b->field_13 = Bieutonghop3::f1($year, 'mission_lv5');
        $b->field_14 = Bieutonghop3::f1($year, 'pay_lab');
        $b->field_15 = Bieutonghop3::f1($year, 'pay_maintain');
        $b->field_16 = Bieutonghop3::f1($year, 'pay_univer');
        $b->field_17 = Bieutonghop3::f1($year, 'pay_improve_other');
        $b->field_18 = Bieutonghop3::f1($year, 'pay_other');
        $b->save();

        return $b;
    }
}
