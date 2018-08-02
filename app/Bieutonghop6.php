<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BieuStatus;

class Bieutonghop6 extends Model
{
	protected $table = "bieutonghop6";
    
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
    ];
    public static function ftmp($p){
        $s = parse_str($p, $out);

        return "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[2]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[3]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[4]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[5]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[6]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[7]."</td>";

    }

    public function generateBieu($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop6/temp.tmp', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@year@', $this->year, $file);
        $file = str_replace('@f1@', Bieutonghop6::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop6::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop6::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop6::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop6::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop6::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop6::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop6::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop6::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop6::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop6::ftmp($this->field_11), $file);
        $file = str_replace('@f12@', Bieutonghop6::ftmp($this->field_12), $file);

        return $file;
    }

    public static function F6Collection($year){
        $user_ids = BieuStatus::where('year', $year)->where('status', 2)->pluck('user_id');
        $b2 = Bieumau6::where('reporter_year', $year)->whereIn('user_id', $user_ids)->get();
        $ids = [];
        foreach ($b2 as $b) {
            if ($b->total != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b->total != "1=&2=&3=&4=&5=&6=&7="){
                $ids[] = $b->id;
            }
        }
        return $ids;
    }

    public static function F6Sum($year, $value, $column)
    {
        $col = Bieutonghop6::F6Collection($year);
        $b2 = Bieumau6::whereIn('id', $col)->get();
        $sum = 0;

        foreach ($b2 as $b) {
            if ($b->{$value} != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b->{$value} != "1=&2=&3=&4=&5=&6=&7=")
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
        $f1 = Bieutonghop6::F6Sum($year, $name, 1);
        $f2 = Bieutonghop6::F6Sum($year, $name, 2);
        $f3 = Bieutonghop6::F6Sum($year, $name, 3);
        $f4 = Bieutonghop6::F6Sum($year, $name, 4);
        $f5 = Bieutonghop6::F6Sum($year, $name, 5);
        $f6 = Bieutonghop6::F6Sum($year, $name, 6);
        $f7 = Bieutonghop6::F6Sum($year, $name, 7);

        return http_build_query(array(1=>$f1,2=>$f2,3=>$f3,4=>$f4,5=>$f5,6=>$f6,7=>$f7));
    }

    
    public static function reBuildBieu($year){
        $b = Bieutonghop6::where('year', $year)->first();
        if (!$b)
            $b = new Bieutonghop6;
        $b->year = $year;
        $b->field_1 = Bieutonghop6::f1($year, 'total');
        $b->field_2 = Bieutonghop6::f1($year, 'total_award_vn');
        $b->field_3 = Bieutonghop6::f1($year, 'total_award_vn1');
        $b->field_4 = Bieutonghop6::f1($year, 'total_award_vn2');
        $b->field_5 = Bieutonghop6::f1($year, 'total_award_vn3');
        $b->field_6 = Bieutonghop6::f1($year, 'total_award_vn4');
        $b->field_7 = Bieutonghop6::f1($year, 'total_award_vn5');
        $b->field_8 = Bieutonghop6::f1($year, 'total_award_other');
        $b->field_9 = Bieutonghop6::f1($year, 'total_award_team');
        $b->field_10 = Bieutonghop6::f1($year, 'total_award_fm');
        $b->field_11 = Bieutonghop6::f1($year, 'total_award_male');
        $b->field_12 = Bieutonghop6::f1($year, 'total_award_female');
        $b->save();

        return $b;
    }
}
