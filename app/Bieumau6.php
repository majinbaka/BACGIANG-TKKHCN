<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieumau6 extends Model
{
	protected $table = "bieumau6";
    
    protected $fillable = [
        'user_id',
    	'name',
        'check',
        'publish_day',
        'total',
        'reporter_year',
        'total_award_vn',
        'total_award_vn1',
        'total_award_vn2',
        'total_award_vn3',
        'total_award_vn4',
        'total_award_vn5',
        'total_award_other',
        'total_award_team',
        'total_award_fm',
        'total_award_male',
        'total_award_female',
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

    public function generateBieu6(){
        $file = file_get_contents('tmp/temp_6/b6.tmp', true);
        $b1 = Bieumau1::where('user_id', $this->user_id)->where('reporter_year', $this->reporter_year)->first();
        $file = str_replace('@receiver@', $b1->receiverTmp(), $file);
        $file = str_replace('@reporter_element_name@', $b1->reporter_element_name, $file);
        $file = str_replace('@f1@', Bieumau6::ftmp($this->total), $file);
        $file = str_replace('@f2@', Bieumau6::ftmp($this->total_award_vn), $file);
        $file = str_replace('@f3@', Bieumau6::ftmp($this->total_award_vn1), $file);
        $file = str_replace('@f4@', Bieumau6::ftmp($this->total_award_vn2), $file);
        $file = str_replace('@f5@', Bieumau6::ftmp($this->total_award_vn3), $file);
        $file = str_replace('@f6@', Bieumau6::ftmp($this->total_award_vn4), $file);
        $file = str_replace('@f7@', Bieumau6::ftmp($this->total_award_vn5), $file);
        $file = str_replace('@f8@', Bieumau6::ftmp($this->total_award_other), $file);
        $file = str_replace('@f9@', Bieumau6::ftmp($this->total_award_team), $file);
        $file = str_replace('@f10@', Bieumau6::ftmp($this->total_award_fm), $file);
        $file = str_replace('@f11@', Bieumau6::ftmp($this->total_award_male), $file);
        $file = str_replace('@f12@', Bieumau6::ftmp($this->total_award_female), $file);

        return $file;
    }

        public function user()
    {
        return $this->belongsTo('App\User');
    }
}
