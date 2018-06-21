<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieutonghop2 extends Model
{
	protected $table = "bieutonghop2";
    
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
    ];

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

    public static function F2Collection($year){
        $b2 = Bieumau2::where('reporter_year', $year)->get();
        $ids = [];
        foreach ($b2 as $b) {
            if ($b->total != "1=&2=&3=&4=&5=&6=&7=&8=&9="){
                $ids[] = $b->id;
            }
        }
        return $ids;
    }

    public static function F2Sum($year, $value, $column)
    {
        $col = Bieutonghop2::F2Collection($year);
        $b2 = Bieumau2::whereIn('id', $col)->get();
        $sum = 0;

        foreach ($b2 as $b) {
            if ($b->{$value} != "1=&2=&3=&4=&5=&6=&7=&8=&9=")
            {
                $s = parse_str($b->{$value}, $out);
                $sum+= $out[$column];
            }
        }
        return $sum;
    }

    public static function F2SumEco($year, $value, $column,  $type)
    {
        $col = Bieutonghop2::F2Collection($year);
        $b2 = Bieumau2::whereIn('id', $col)->get();
        $sum = 0;

        foreach ($b2 as $b) {
            $b1 = Bieumau1::where('user_id', $b->user_id)->where('reporter_year', $year)->where('type_econom', $type)->first();
            if ($b->{$value} != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b1)
            {
                $s = parse_str($b->{$value}, $out);
                $sum+= $out[$column];
            }
        }
        return $sum;
    }

    public static function F3SumEco($year, $value, $column, $type)
    {
        $col = Bieutonghop2::F2Collection($year);
        $b2 = Bieumau2::whereIn('id', $col)->get();
        $sum = 0;

        foreach ($b2 as $b) {
            $b1 = Bieumau1::where('user_id', $b->user_id)->where('reporter_year', $year)->whereIn('type_company', $type)->first();
            if ($b->{$value} != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b1)
            {
                $s = parse_str($b->{$value}, $out);
                $sum+= $out[$column];
            }
        }
        return $sum;
    }

    public static function f1($year, $name){
        $f1 = Bieutonghop2::F2Sum($year, $name, 1);
        $f2 = Bieutonghop2::F2Sum($year, $name, 2);
        $f3 = Bieutonghop2::F2Sum($year, $name, 3);
        $f4 = Bieutonghop2::F2Sum($year, $name, 4);
        $f5 = Bieutonghop2::F2Sum($year, $name, 5);
        $f6 = Bieutonghop2::F2Sum($year, $name, 6);
        $f7 = Bieutonghop2::F2Sum($year, $name, 7);
        $f8 = Bieutonghop2::F2Sum($year, $name, 8);
        $f9 = Bieutonghop2::F2Sum($year, $name, 9);

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5,6=>$f6,7=>$f7,8=>$f8,9=>$f9));
    }

    public static function f2($year, $name, $type){
        $f1 = Bieutonghop2::F2SumEco($year, $name, 1, $type);
        $f2 = Bieutonghop2::F2SumEco($year, $name, 2, $type);
        $f3 = Bieutonghop2::F2SumEco($year, $name, 3, $type);
        $f4 = Bieutonghop2::F2SumEco($year, $name, 4, $type);
        $f5 = Bieutonghop2::F2SumEco($year, $name, 5, $type);
        $f6 = Bieutonghop2::F2SumEco($year, $name, 6, $type);
        $f7 = Bieutonghop2::F2SumEco($year, $name, 7, $type);
        $f8 = Bieutonghop2::F2SumEco($year, $name, 8, $type);
        $f9 = Bieutonghop2::F2SumEco($year, $name, 9, $type);

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5,6=>$f6,7=>$f7,8=>$f8,9=>$f9));
    }

    public static function f3($year, $name, $type){
        $f1 = Bieutonghop2::F2SumEco($year, $name, 1, $type);
        $f2 = Bieutonghop2::F2SumEco($year, $name, 2, $type);
        $f3 = Bieutonghop2::F2SumEco($year, $name, 3, $type);
        $f4 = Bieutonghop2::F2SumEco($year, $name, 4, $type);
        $f5 = Bieutonghop2::F2SumEco($year, $name, 5, $type);
        $f6 = Bieutonghop2::F2SumEco($year, $name, 6, $type);
        $f7 = Bieutonghop2::F2SumEco($year, $name, 7, $type);
        $f8 = Bieutonghop2::F2SumEco($year, $name, 8, $type);
        $f9 = Bieutonghop2::F2SumEco($year, $name, 9, $type);

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5,6=>$f6,7=>$f7,8=>$f8,9=>$f9));
    }

    public function generateBieu($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop2/temp.tmp', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@f1@', Bieutonghop2::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop2::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop2::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop2::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop2::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop2::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop2::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop2::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop2::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop2::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop2::ftmp($this->field_11), $file);
        $file = str_replace('@f12@', Bieutonghop2::ftmp($this->field_12), $file);
        $file = str_replace('@f13@', Bieutonghop2::ftmp($this->field_13), $file);
        $file = str_replace('@f14@', Bieutonghop2::ftmp($this->field_14), $file);
        $file = str_replace('@f15@', Bieutonghop2::ftmp($this->field_15), $file);
        $file = str_replace('@f16@', Bieutonghop2::ftmp($this->field_16), $file);
        $file = str_replace('@f17@', Bieutonghop2::ftmp($this->field_17), $file);
        $file = str_replace('@f18@', Bieutonghop2::ftmp($this->field_18), $file);
        $file = str_replace('@f19@', Bieutonghop2::ftmp($this->field_19), $file);
        $file = str_replace('@f20@', Bieutonghop2::ftmp($this->field_20), $file);
        $file = str_replace('@f21@', Bieutonghop2::ftmp($this->field_21), $file);
        $file = str_replace('@f22@', Bieutonghop2::ftmp($this->field_22), $file);
        $file = str_replace('@f23@', Bieutonghop2::ftmp($this->field_23), $file);

        return $file;
    }
    public static function reBuildBieu($year){
        $b = Bieutonghop2::where('year', $year)->first();
        if (!$b)
            $b = new Bieutonghop2;
        $b->year = $year;
        $b->field_1 = Bieutonghop2::f1($year, 'total');
        $b->field_2 = Bieutonghop2::f1($year, 'female_total');
        $b->field_3 = Bieutonghop2::f2($year, 'total', 1);
        $b->field_4 = Bieutonghop2::f2($year, 'total', 2);
        $b->field_5 = Bieutonghop2::f2($year, 'total', 3);
        $b->field_6 = Bieutonghop2::f3($year, 'total', array(1));
        $b->field_7 = Bieutonghop2::f3($year, 'total', array(2));
        $b->field_8 = Bieutonghop2::f3($year, 'total', array(3,4,5,6));
        $b->field_9 = Bieutonghop2::f3($year, 'total', array(7,8,9,10,11,12,13,14,15,16,17));
        $b->field_10 = Bieutonghop2::f3($year, 'total', array(18));
        $b->field_11 = Bieutonghop2::f3($year, 'total', array(19));
        $b->field_12 = Bieutonghop2::f3($year, 'total', array(20));
        $b->field_13 = Bieutonghop2::f1($year, 'nation_vn');
        $b->field_14 = Bieutonghop2::f1($year, 'nation_kinh');
        $b->field_15 = Bieutonghop2::f1($year, 'nation_other');
        $b->field_16 = Bieutonghop2::f1($year, 'nation_foregin');
        $b->field_17 = Bieutonghop2::f1($year, 'class_khtn');
        $b->field_18 = Bieutonghop2::f1($year, 'class_khkt');
        $b->field_19 = Bieutonghop2::f1($year, 'class_khyd');
        $b->field_20 = Bieutonghop2::f1($year, 'class_khnn');
        $b->field_21 = Bieutonghop2::f1($year, 'class_khxh');
        $b->field_22 = Bieutonghop2::f1($year, 'class_khnv');
        $b->field_23 = Bieutonghop2::f1($year, 'class_other');
        $b->save();

        return $b;
    }
}
