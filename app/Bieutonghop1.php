<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bieumau1;
use App\Bieumau2;
use App\Bieumau3;
use App\Bieumau4;
use App\Bieumau5;
use App\Bieumau6;

class Bieutonghop1 extends Model
{
	protected $table = "bieutonghop1";
    
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
    ];
    public static function F1Total($year){
        return count(Bieutonghop1::F1Collection($year));
    }

    public static function F1Collection($year){
        $b1 = Bieumau1::where('reporter_year', $year)->get();
        $ids = [];
        foreach ($b1 as $b) {
            $b2 = Bieumau2::where('reporter_year', $year)
                ->where('user_id', $b->user_id)
                ->first();
            if ($b2->total != "1=&2=&3=&4=&5=&6=&7=&8=&9="){
                $ids[] = $b->id;
                continue;
            }
            $b3 = Bieumau3::where('reporter_year', $year)
                ->where('user_id', $b->user_id)
                ->first();
            if ($b3->total != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b3->total != "1=&2=&3=&4=&5="){
                $ids[] = $b->id;
                continue;
            }
            $b4 = Bieumau4::where('reporter_year', $year)
                ->where('user_id', $b->user_id)
                ->first();
            if ($b4->total != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b4->total != "1=&2=&3=&4=&5=&6="){
                $ids[] = $b->id;
                continue;
            }
            $b5 = Bieumau5::where('reporter_year', $year)
                ->where('user_id', $b->user_id)
                ->first();
            if ($b5->total != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b5->total != "1=&2="){
                $ids[] = $b->id;
                continue;
            }
            $b6 = Bieumau6::where('reporter_year', $year)
                ->where('user_id', $b->user_id)
                ->first();
            if ($b6->total != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b6->total != "1=&2=&3=&4=&5=&6=&7="){
                $ids[] = $b->id;
                continue;
            }
        }
        return $ids;
    }

    public static function buildF1($year){
        $col = Bieutonghop1::F1Collection($year);
        $f1 = Bieutonghop1::F1Total($year);
        $f2 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 1)->count();
        $f3 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 2)->count();
        $f4 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 3)->count();
        $f5 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 4)->count();
        $f6 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 5)->count();
        $f7 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 6)->count();
        $f8 = Bieumau1::whereIn('id', $col)->where('type_econom', 1)->count();
        $f9 = Bieumau1::whereIn('id', $col)->where('type_econom', 2)->count();
        $f10 = Bieumau1::whereIn('id', $col)->where('type_econom', 3)->count();

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5,6=>$f6,7=>$f7,8=>$f8,9=>$f9,10=>$f10));
    }


    public static function buildF2($year, $e){
        $col = Bieutonghop1::F1Collection($year);
        $f1 = Bieumau1::whereIn('id', $col)->where('establish_lever', $e)->count();
        $f2 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 1)->where('establish_lever', $e)->count();
        $f3 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 2)->where('establish_lever', $e)->count();
        $f4 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 3)->where('establish_lever', $e)->count();
        $f5 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 4)->where('establish_lever', $e)->count();
        $f6 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 5)->where('establish_lever', $e)->count();
        $f7 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 6)->where('establish_lever', $e)->count();
        $f8 = Bieumau1::whereIn('id', $col)->where('type_econom', 1)->where('establish_lever', $e)->count();
        $f9 = Bieumau1::whereIn('id', $col)->where('type_econom', 2)->where('establish_lever', $e)->count();
        $f10 = Bieumau1::whereIn('id', $col)->where('type_econom', 3)->where('establish_lever', $e)->count();

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5,6=>$f6,7=>$f7,8=>$f8,9=>$f9,10=>$f10));
    }

    public static function buildF3($year, $c){
        $col = Bieutonghop1::F1Collection($year);
        $f1 = Bieumau1::whereIn('id', $col)->where('type_company', $c)->count();
        $f2 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 1)->where('type_company', $c)->count();
        $f3 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 2)->where('type_company', $c)->count();
        $f4 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 3)->where('type_company', $c)->count();
        $f5 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 4)->where('type_company', $c)->count();
        $f6 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 5)->where('type_company', $c)->count();
        $f7 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 6)->where('type_company', $c)->count();
        $f8 = Bieumau1::whereIn('id', $col)->where('type_econom', 1)->where('type_company', $c)->count();
        $f9 = Bieumau1::whereIn('id', $col)->where('type_econom', 2)->where('type_company', $c)->count();
        $f10 = Bieumau1::whereIn('id', $col)->where('type_econom', 3)->where('type_company', $c)->count();

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5,6=>$f6,7=>$f7,8=>$f8,9=>$f9,10=>$f10));
    }

    public static function buildF4($year){
        $col = Bieutonghop1::F1Collection($year);
        $f1 = Bieumau1::whereIn('id', $col)->where('certificate_number',"!=", "")->count();
        $f2 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 1)->where('certificate_number',"!=", "")->count();
        $f3 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 2)->where('certificate_number',"!=", "")->count();
        $f4 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 3)->where('certificate_number',"!=", "")->count();
        $f5 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 4)->where('certificate_number',"!=", "")->count();
        $f6 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 5)->where('certificate_number',"!=", "")->count();
        $f7 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 6)->where('certificate_number',"!=", "")->count();
        $f8 = Bieumau1::whereIn('id', $col)->where('type_econom', 1)->where('certificate_number',"!=", "")->count();
        $f9 = Bieumau1::whereIn('id', $col)->where('type_econom', 2)->where('certificate_number',"!=", "")->count();
        $f10 = Bieumau1::whereIn('id', $col)->where('type_econom', 3)->where('certificate_number',"!=", "")->count();

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5,6=>$f6,7=>$f7,8=>$f8,9=>$f9,10=>$f10));
    }

    public static function buildF5($year, $c){
        $col = Bieutonghop1::F1Collection($year);
        $f1 = Bieumau1::whereIn('id', $col)->whereIn('type_company', $c)->count();
        $f2 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 1)->whereIn('type_company', $c)->count();
        $f3 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 1)->whereIn('type_company', $c)->count();
        $f4 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 1)->whereIn('type_company', $c)->count();
        $f5 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 1)->whereIn('type_company', $c)->count();
        $f6 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 1)->whereIn('type_company', $c)->count();
        $f7 = Bieumau1::whereIn('id', $col)->where('lab_number_sub', 1)->whereIn('type_company', $c)->count();
        $f8 = Bieumau1::whereIn('id', $col)->where('type_econom', 1)->whereIn('type_company', $c)->count();
        $f9 = Bieumau1::whereIn('id', $col)->where('type_econom', 2)->whereIn('type_company', $c)->count();
        $f10 = Bieumau1::whereIn('id', $col)->where('type_econom', 3)->whereIn('type_company', $c)->count();

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5,6=>$f6,7=>$f7,8=>$f8,9=>$f9,10=>$f10));
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
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[9]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[10]."</td>";

    }

    public function generateBieu($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop1/temp.tmp', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@f1@', Bieutonghop1::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop1::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop1::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop1::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop1::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop1::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop1::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop1::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop1::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop1::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop1::ftmp($this->field_11), $file);
        $file = str_replace('@f12@', Bieutonghop1::ftmp($this->field_12), $file);
        $file = str_replace('@f13@', Bieutonghop1::ftmp($this->field_13), $file);
        $file = str_replace('@f14@', Bieutonghop1::ftmp($this->field_14), $file);
        $file = str_replace('@f15@', Bieutonghop1::ftmp($this->field_15), $file);
        $file = str_replace('@f16@', Bieutonghop1::ftmp($this->field_16), $file);
        $file = str_replace('@f17@', Bieutonghop1::ftmp($this->field_17), $file);
        $file = str_replace('@f18@', Bieutonghop1::ftmp($this->field_18), $file);
        $file = str_replace('@f19@', Bieutonghop1::ftmp($this->field_19), $file);
        $file = str_replace('@f20@', Bieutonghop1::ftmp($this->field_20), $file);
        $file = str_replace('@f21@', Bieutonghop1::ftmp($this->field_21), $file);
        $file = str_replace('@f22@', Bieutonghop1::ftmp($this->field_22), $file);

        return $file;
    }

    public static function reBuildBieu($year){
        $b = Bieutonghop1::where('year', $year)->first();
        if (!$b)
            $b = new Bieutonghop1;
        $b->year = $year;
        $b->field_1 = Bieutonghop1::buildF1($year);
        $b->field_2 = Bieutonghop1::buildF2($year, 7);
        $b->field_3 = Bieutonghop1::buildF2($year, 8);
        $b->field_4 = Bieutonghop1::buildF2($year, 9);
        $b->field_5 = Bieutonghop1::buildF3($year, 1);
        $b->field_6 = Bieutonghop1::buildF3($year, 2);
        $b->field_7 = Bieutonghop1::buildF5($year, array(3,4,5,6));
        $b->field_8 = Bieutonghop1::buildF5($year, array(7,8,9,10,11,12,13,14,15,16,17));
        $b->field_9 = Bieutonghop1::buildF3($year, 8);
        $b->field_10 = Bieutonghop1::buildF3($year, 9);
        $b->field_11 = Bieutonghop1::buildF3($year, 10);
        $b->field_12 = Bieutonghop1::buildF3($year, 11);
        $b->field_13 = Bieutonghop1::buildF3($year, 12);
        $b->field_14 = Bieutonghop1::buildF3($year, 13);
        $b->field_15 = Bieutonghop1::buildF3($year, 14);
        $b->field_16 = Bieutonghop1::buildF3($year, 15);
        $b->field_17 = Bieutonghop1::buildF3($year, 16);
        $b->field_18 = Bieutonghop1::buildF3($year, 17);
        $b->field_19 = Bieutonghop1::buildF3($year, 18);
        $b->field_20 = Bieutonghop1::buildF3($year, 19);
        $b->field_21 = Bieutonghop1::buildF3($year, 20);
        $b->field_22 = Bieutonghop1::buildF4($year);
        $b->save();

        return $b;
    }
}
