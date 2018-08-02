<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieutonghop11 extends Model
{
	protected $table = "bieutonghop11";
    
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
    ];

    public static function ftmp($p){
        return "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$p."</td>";

    }

    public function generateBieu($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop11/temp.tmp', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@year@', $this->year, $file);
        $file = str_replace('@f1@', Bieutonghop11::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop11::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop11::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop11::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop11::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop11::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop11::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop11::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop11::ftmp($this->field_9), $file);

        return $file;
    }

    public function generateBieuX($reporter, $receiver){
        $file = file_get_contents('tmp/tonghop11/show11.blade.php', true);
        $file = str_replace('@reporter@', $reporter, $file);
        $file = str_replace('@receiver@', $receiver, $file);
        $file = str_replace('@year@', $this->year, $file);
        $file = str_replace('@f1@', Bieutonghop11::ftmp($this->field_1), $file);
        $file = str_replace('@f2@', Bieutonghop11::ftmp($this->field_2), $file);
        $file = str_replace('@f3@', Bieutonghop11::ftmp($this->field_3), $file);
        $file = str_replace('@f4@', Bieutonghop11::ftmp($this->field_4), $file);
        $file = str_replace('@f5@', Bieutonghop11::ftmp($this->field_5), $file);
        $file = str_replace('@f6@', Bieutonghop11::ftmp($this->field_6), $file);
        $file = str_replace('@f7@', Bieutonghop11::ftmp($this->field_7), $file);
        $file = str_replace('@f8@', Bieutonghop11::ftmp($this->field_8), $file);
        $file = str_replace('@f9@', Bieutonghop11::ftmp($this->field_9), $file);

        return $file;
    }

    public function updateBieu($params){
        $b = $this;
        $b->field_1 = $params['field_1'];
        $b->field_2 = $params['field_2'];
        $b->field_3 = $params['field_3'];
        $b->field_4 = $params['field_4'];
        $b->field_5 = $params['field_5'];
        $b->field_6 = $params['field_6'];
        $b->field_7 = $params['field_7'];
        $b->field_8 = $params['field_8'];
        $b->field_9 = $params['field_9'];
        $b->save();

        return ;
    }
}
