<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieutonghop9 extends Model
{
	protected $table = "bieutonghop9";
    
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
    ];
    public static function ftmp($p){
        $s = parse_str($p, $out);

        return "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[2]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[3]."</td>
        <td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[4]."</td>";

    }

    public function generateBieu($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop9/temp.tmp', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@f1@', Bieutonghop9::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop9::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop9::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop9::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop9::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop9::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop9::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop9::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop9::ftmp($this->field_9), $file);
        $file = str_replace('@f10@', Bieutonghop9::ftmp($this->field_10), $file);
        $file = str_replace('@f11@', Bieutonghop9::ftmp($this->field_11), $file);

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
    
        $b->save();

        return $b;
    }
}
