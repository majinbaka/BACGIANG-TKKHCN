<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieutonghop7 extends Model
{
	protected $table = "bieutonghop7";
    
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
    ];

    public static function ftmp($p){
        return "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$p."</td>";

    }

    public static function ftmpx($p, $x){
        $s = parse_str($p, $out);
        if (!isset($out[$x]))
            $out[$x] = 0;

        return "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[$x]."</td>";

    }

    public function updateBieu($params){
        $b = $this;
        $b->field_1 = $params['field_1'];
        $b->field_2 = $params['field_2'];
        $b->field_3 = $params['field_3'];
        $b->field_4 = $params['field_4'];
        $b->field_5 = http_build_query($params['field_5']);
        $b->field_6 = $params['field_6'];
        $b->field_7 = $params['field_7'];
        $b->field_8 = $params['field_8'];
        $b->field_9 = $params['field_9'];
        $b->field_10 = $params['field_10'];
        $b->field_11 = $params['field_11'];
        $b->field_12 = $params['field_12'];
        $b->field_13 = $params['field_13'];
        $b->field_14 = $params['field_14'];
        $b->field_15 = $params['field_15'];
        $b->field_16 = $params['field_16'];
        $b->field_17 = $params['field_17'];
        $b->field_18 = $params['field_18'];
        $b->field_19 = $params['field_19'];
        $b->field_20 = $params['field_20'];
        $b->field_21 = http_build_query($params['field_21']);
        $b->field_22 = $params['field_22'];
        $b->field_23 = $params['field_23'];
        $b->field_24 = $params['field_24'];
        $b->field_25 = $params['field_25'];
        $b->field_26 = $params['field_26'];
        $b->field_27 = $params['field_27'];
        $b->field_28 = $params['field_28'];
        $b->field_29 = $params['field_29'];
        $b->field_30 = $params['field_30'];
        $b->field_31 = $params['field_31'];
        $b->field_32 = $params['field_32'];
        $b->field_33 = $params['field_33'];
        $b->save();

        return ;
    }

    public function generateBieu($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop7/temp.tmp', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@year@', $this->year, $file);
        $file = str_replace('@f1@', Bieutonghop7::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop7::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop7::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop7::ftmp($this->field_4), $file);
        $file = str_replace('@f5_1@', Bieutonghop7::ftmpx($this->field_5, 1), $file);
        $file = str_replace('@f5_2@', Bieutonghop7::ftmpx($this->field_5, 2), $file);
        $file = str_replace('@f5_3@', Bieutonghop7::ftmpx($this->field_5, 3), $file);
        $file = str_replace('@f5_4@', Bieutonghop7::ftmpx($this->field_5, 4), $file);
        $file = str_replace('@f5_5@', Bieutonghop7::ftmpx($this->field_5, 5), $file);
        $file = str_replace('@f6@', Bieutonghop7::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop7::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop7::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop7::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop7::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop7::ftmp($this->field_11), $file);
        $file = str_replace('@f12@', Bieutonghop7::ftmp($this->field_12), $file);
        $file = str_replace('@f13@', Bieutonghop7::ftmp($this->field_13), $file);
        $file = str_replace('@f14@', Bieutonghop7::ftmp($this->field_14), $file);
        $file = str_replace('@f15@', Bieutonghop7::ftmp($this->field_15), $file);
        $file = str_replace('@f16@', Bieutonghop7::ftmp($this->field_16), $file);
        $file = str_replace('@f17@', Bieutonghop7::ftmp($this->field_17), $file);
        $file = str_replace('@f18@', Bieutonghop7::ftmp($this->field_18), $file);
        $file = str_replace('@f19@', Bieutonghop7::ftmp($this->field_19), $file);
        $file = str_replace('@f20@', Bieutonghop7::ftmp($this->field_20), $file);
        $file = str_replace('@f21_1@', Bieutonghop7::ftmpx($this->field_21, 1), $file);
        $file = str_replace('@f21_2@', Bieutonghop7::ftmpx($this->field_21, 2), $file);
        $file = str_replace('@f22@', Bieutonghop7::ftmp($this->field_22), $file);
        $file = str_replace('@f23@', Bieutonghop7::ftmp($this->field_23), $file);
        $file = str_replace('@f24@', Bieutonghop7::ftmp($this->field_24), $file);
        $file = str_replace('@f25@', Bieutonghop7::ftmp($this->field_25), $file);
        $file = str_replace('@f26@', Bieutonghop7::ftmp($this->field_26), $file);
        $file = str_replace('@f27@', Bieutonghop7::ftmp($this->field_27), $file);
        $file = str_replace('@f28@', Bieutonghop7::ftmp($this->field_28), $file);
        $file = str_replace('@f29@', Bieutonghop7::ftmp($this->field_29), $file);
        $file = str_replace('@f30@', Bieutonghop7::ftmp($this->field_30), $file);
        $file = str_replace('@f31@', Bieutonghop7::ftmp($this->field_31), $file);
        $file = str_replace('@f32@', Bieutonghop7::ftmp($this->field_32), $file);
        $file = str_replace('@f33@', Bieutonghop7::ftmp($this->field_33), $file);

        return $file;
    }

    public function generateBieuX($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop7/temp7.blade.php', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@year@', $this->year, $file);
        $file = str_replace('@f1@', Bieutonghop7::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop7::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop7::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop7::ftmp($this->field_4), $file);
        $file = str_replace('@f5_1@', Bieutonghop7::ftmpx($this->field_5, 1), $file);
        $file = str_replace('@f5_2@', Bieutonghop7::ftmpx($this->field_5, 2), $file);
        $file = str_replace('@f5_3@', Bieutonghop7::ftmpx($this->field_5, 3), $file);
        $file = str_replace('@f5_4@', Bieutonghop7::ftmpx($this->field_5, 4), $file);
        $file = str_replace('@f5_5@', Bieutonghop7::ftmpx($this->field_5, 5), $file);
        $file = str_replace('@f6@', Bieutonghop7::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop7::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop7::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop7::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop7::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop7::ftmp($this->field_11), $file);
        $file = str_replace('@f12@', Bieutonghop7::ftmp($this->field_12), $file);
        $file = str_replace('@f13@', Bieutonghop7::ftmp($this->field_13), $file);
        $file = str_replace('@f14@', Bieutonghop7::ftmp($this->field_14), $file);
        $file = str_replace('@f15@', Bieutonghop7::ftmp($this->field_15), $file);
        $file = str_replace('@f16@', Bieutonghop7::ftmp($this->field_16), $file);
        $file = str_replace('@f17@', Bieutonghop7::ftmp($this->field_17), $file);
        $file = str_replace('@f18@', Bieutonghop7::ftmp($this->field_18), $file);
        $file = str_replace('@f19@', Bieutonghop7::ftmp($this->field_19), $file);
        $file = str_replace('@f20@', Bieutonghop7::ftmp($this->field_20), $file);
        $file = str_replace('@f21_1@', Bieutonghop7::ftmpx($this->field_21, 1), $file);
        $file = str_replace('@f21_2@', Bieutonghop7::ftmpx($this->field_21, 2), $file);
        $file = str_replace('@f22@', Bieutonghop7::ftmp($this->field_22), $file);
        $file = str_replace('@f23@', Bieutonghop7::ftmp($this->field_23), $file);
        $file = str_replace('@f24@', Bieutonghop7::ftmp($this->field_24), $file);
        $file = str_replace('@f25@', Bieutonghop7::ftmp($this->field_25), $file);
        $file = str_replace('@f26@', Bieutonghop7::ftmp($this->field_26), $file);
        $file = str_replace('@f27@', Bieutonghop7::ftmp($this->field_27), $file);
        $file = str_replace('@f28@', Bieutonghop7::ftmp($this->field_28), $file);
        $file = str_replace('@f29@', Bieutonghop7::ftmp($this->field_29), $file);
        $file = str_replace('@f30@', Bieutonghop7::ftmp($this->field_30), $file);
        $file = str_replace('@f31@', Bieutonghop7::ftmp($this->field_31), $file);
        $file = str_replace('@f32@', Bieutonghop7::ftmp($this->field_32), $file);
        $file = str_replace('@f33@', Bieutonghop7::ftmp($this->field_33), $file);

        return $file;
    }
}
