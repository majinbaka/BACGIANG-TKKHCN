<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
