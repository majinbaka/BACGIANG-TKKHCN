<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieutonghop8 extends Model
{
	protected $table = "bieutonghop8";
    
    protected $fillable = [
        'publish_day',
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
    ];
    public static function ftmp($p){
        $s = parse_str($p, $out);

        return "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[2]."</td>";

    }

    public function generateBieu($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop8/temp.tmp', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@year@', $this->year, $file);
        $file = str_replace('@f1@', Bieutonghop8::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop8::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop8::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop8::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop8::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop8::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop8::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop8::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop8::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop8::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop8::ftmp($this->field_11), $file);
        $file = str_replace('@f12@', Bieutonghop8::ftmp($this->field_12), $file);
        $file = str_replace('@f13@', Bieutonghop8::ftmp($this->field_13), $file);
        $file = str_replace('@f14@', Bieutonghop8::ftmp($this->field_14), $file);
        $file = str_replace('@f15@', Bieutonghop8::ftmp($this->field_15), $file);
        $file = str_replace('@f16@', Bieutonghop8::ftmp($this->field_16), $file);
        $file = str_replace('@f17@', Bieutonghop8::ftmp($this->field_17), $file);
        $file = str_replace('@f18@', Bieutonghop8::ftmp($this->field_18), $file);
        $file = str_replace('@f19@', Bieutonghop8::ftmp($this->field_19), $file);
        $file = str_replace('@f20@', Bieutonghop8::ftmp($this->field_20), $file);
        $file = str_replace('@f21@', Bieutonghop8::ftmp($this->field_21), $file);

        return $file;
    }

    public function generateBieuX($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop8/show8.blade.php', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@year@', $this->year, $file);
        $file = str_replace('@f1@', Bieutonghop8::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop8::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop8::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop8::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop8::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop8::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop8::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop8::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop8::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop8::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop8::ftmp($this->field_11), $file);
        $file = str_replace('@f12@', Bieutonghop8::ftmp($this->field_12), $file);
        $file = str_replace('@f13@', Bieutonghop8::ftmp($this->field_13), $file);
        $file = str_replace('@f14@', Bieutonghop8::ftmp($this->field_14), $file);
        $file = str_replace('@f15@', Bieutonghop8::ftmp($this->field_15), $file);
        $file = str_replace('@f16@', Bieutonghop8::ftmp($this->field_16), $file);
        $file = str_replace('@f17@', Bieutonghop8::ftmp($this->field_17), $file);
        $file = str_replace('@f18@', Bieutonghop8::ftmp($this->field_18), $file);
        $file = str_replace('@f19@', Bieutonghop8::ftmp($this->field_19), $file);
        $file = str_replace('@f20@', Bieutonghop8::ftmp($this->field_20), $file);
        $file = str_replace('@f21@', Bieutonghop8::ftmp($this->field_21), $file);

        return $file;
    }

    public function updateBieu($params){
        $b = $this;
        $b->field_1 = http_build_query($params['field_1']);
        $b->field_2 = http_build_query($params['field_2']);
        $b->field_3 = http_build_query($params['field_3']);
        $b->field_4 = http_build_query($params['field_4']);
        $b->field_5 = http_build_query($params['field_5']);
        $b->field_6 = http_build_query($params['field_6']);
        $b->field_7 = http_build_query($params['field_7']);
        $b->field_8 = http_build_query($params['field_8']);
        $b->field_9 = http_build_query($params['field_9']);
        $b->field_10 = http_build_query($params['field_10']);
        $b->field_11 = http_build_query($params['field_11']);
        $b->field_12 = http_build_query($params['field_12']);
        $b->field_13 = http_build_query($params['field_13']);
        $b->field_14 = http_build_query($params['field_14']);
        $b->field_15 = http_build_query($params['field_15']);
        $b->field_16 = http_build_query($params['field_16']);
        $b->field_17 = http_build_query($params['field_17']);
        $b->field_18 = http_build_query($params['field_18']);
        $b->field_19 = http_build_query($params['field_19']);
        $b->field_20 = http_build_query($params['field_20']);
        $b->field_21 = http_build_query($params['field_21']);
        $b->save();

        return $b;
    }
}
