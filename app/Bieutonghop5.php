<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BieuStatus;

class Bieutonghop5 extends Model
{
	protected $table = "bieutonghop5";
    
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
    public static function ftmp($p, $none = 0){
        $s = parse_str($p, $out);
        if ($none == 0)
return "<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>
<td rowspan='0' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='1'>".$out[2]."</td>";
        $res = "";

        for ($i=1; $i <= 2; $i++) {
          if($i != $none) 
          $res .= "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>";
          else 
            $res .= "<td rowspan='0' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>X</td>";
        }
        return $res;
    }

    public function generateBieu($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop5/temp.tmp', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@year@', $this->year, $file);
        $file = str_replace('@f1@', Bieutonghop5::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop5::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop5::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop5::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop5::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop5::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop5::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop5::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop5::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop5::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop5::ftmp($this->field_11), $file);
        $file = str_replace('@f12@', Bieutonghop5::ftmp($this->field_12,1), $file);
        $file = str_replace('@f13@', Bieutonghop5::ftmp($this->field_13,1), $file);
        $file = str_replace('@f14@', Bieutonghop5::ftmp($this->field_14,1), $file);
        $file = str_replace('@f15@', Bieutonghop5::ftmp($this->field_15,1), $file);
        $file = str_replace('@f16@', Bieutonghop5::ftmp($this->field_16,1), $file);
        $file = str_replace('@f17@', Bieutonghop5::ftmp($this->field_17), $file);
        $file = str_replace('@f18@', Bieutonghop5::ftmp($this->field_18,2), $file);
        $file = str_replace('@f19@', Bieutonghop5::ftmp($this->field_19), $file);
        $file = str_replace('@f20@', Bieutonghop5::ftmp($this->field_20,2), $file);
        $file = str_replace('@f21@', Bieutonghop5::ftmp($this->field_21,2), $file);
        $file = str_replace('@f22@', Bieutonghop5::ftmp($this->field_22,2), $file);

        return $file;
    }


    public static function F5Collection($year){
        $user_ids = BieuStatus::where('year', $year)->where('status', 2)->pluck('user_id');
        $b2 = Bieumau5::where('reporter_year', $year)->whereIn('user_id', $user_ids)->get();
        $ids = [];
        foreach ($b2 as $b) {
            if ($b->total != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b->total != "1=&2="){
                $ids[] = $b->id;
            }
        }
        return $ids;
    }

    public static function F5Sum($year, $value, $column)
    {
        $col = Bieutonghop5::F5Collection($year);
        $b2 = Bieumau5::whereIn('id', $col)->get();
        $sum = 0;

        foreach ($b2 as $b) {
            if ($b->{$value} != "1=&2=&3=&4=&5=&6=&7=&8=&9=" && $b->{$value} != "1=&2=" && $b->{$value} != "1=")
            {
                $s = parse_str($b->{$value}, $out);
                if (array_key_exists($column, $out))
                if (is_numeric($out[$column]))
                    $sum+= ($out[$column]);
            }
        }

        return $sum;
    }

    public static function f1($year, $name, $block = true){
        $f1 = Bieutonghop5::F5Sum($year, $name, 1);
        $f2 = Bieutonghop5::F5Sum($year, $name, 2);

        return http_build_query(array(1=>$f1,2=>$f2));
    }

    public static function reBuildBieu($year){
        $b = Bieutonghop5::where('year', $year)->first();
        if (!$b)
            $b = new Bieutonghop5;
        $b->year = $year;
        $b->field_1 = Bieutonghop5::f1($year, 'total');
        $b->field_2 = Bieutonghop5::f1($year, 'mission_lab_1');
        $b->field_3 = Bieutonghop5::f1($year, 'mission_lab_2');
        $b->field_4 = Bieutonghop5::f1($year, 'mission_lab_3');
        $b->field_5 = Bieutonghop5::f1($year, 'mission_lab_4');
        $b->field_6 = Bieutonghop5::f1($year, 'mission_lab_5');
        $b->field_7 = Bieutonghop5::f1($year, 'mission_lab_6');
        $b->field_8 = Bieutonghop5::f1($year, 'collaborate_1');
        $b->field_9 = Bieutonghop5::f1($year, 'collaborate_2');
        $b->field_10 = Bieutonghop5::f1($year, 'collaborate_3');
        $b->field_11 = Bieutonghop5::f1($year, 'collaborate_4');
        $b->field_12 = Bieutonghop5::f1($year, 'money_1');
        $b->field_13 = Bieutonghop5::f1($year, 'money_2');
        $b->field_14 = Bieutonghop5::f1($year, 'money_3');
        $b->field_15 = Bieutonghop5::f1($year, 'money_4');
        $b->field_16 = Bieutonghop5::f1($year, 'money_5');
        $b->field_17 = Bieutonghop5::f1($year, 'team_out');
        $b->field_18 = Bieutonghop5::f1($year, 'human_out');
        $b->field_19 = Bieutonghop5::f1($year, 'team_in');
        $b->field_20 = Bieutonghop5::f1($year, 'human_in');
        $b->field_21 = Bieutonghop5::f1($year, 'total_h1');
        $b->field_22 = Bieutonghop5::f1($year, 'total_h2');
        $b->save();

        return $b;
    }
}
