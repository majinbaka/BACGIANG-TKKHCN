<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieumau4 extends Model
{
	protected $table = "bieumau4";
    
    protected $fillable = [
      'user_id',
    	'name',
      'publish_day',
        'check',
      'reporter_year',
      'total',
      'subject_lv1',
      'subject_lv2',
      'subject_lv3',
      'subject_lv4',
      'subject_lv5',
      'subject_lab_1',
      'subject_lab_2',
      'subject_lab_3',
      'subject_lab_4',
      'subject_lab_5',
      'subject_lab_6',
      'subject_money_1',
      'subject_money_2',
      'subject_money_3',
      'subject_money_4',
      'subject_money_5',
      'subject_money_6',
      'subject_money_7',
      'total_job',
      'total_job_1',
      'total_job_2',
      'total_job_3',
      'total_job_4',
      'total_job_5',
      'total_lab_1',
      'total_lab_2',
      'total_lab_3',
      'total_lab_4',
      'total_lab_5',
      'total_lab_6',
      'total_money_1',
      'total_money_2',
      'total_money_3',
      'total_money_4',
      'total_money_5',
      'total_money_6',
      'total_money_7',
    ];

    public static function ftmp($p, $none = 0){
        $s = parse_str($p, $out);
        if ($none == 0)
return "<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[1]."</td>
<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[2]."</td>
<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[3]."</td>
<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[4]."</td>
<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[5]."</td>
<td rowspan='1' align='center' style='    font-family: Times New Roman;    font-size: 12pt;    color: #333333;    padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[6]."</td>";
        $res = "";

        for ($i=1; $i <= 6; $i++) {
          if($i != $none) 
          $res .= "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>".$out[$i]."</td>";
          else 
            $res .= "<td rowspan='1' align='center' style=' font-family: Times New Roman; font-size: 12pt; color: #333333; padding: 5px;    text-align: center;    vertical-align: middle;    border: solid 1px #000000;' colspan='0'>X</td>";
        }
        return $res;
    }

    public function generateBieu4(){
        $file = file_get_contents('tmp/temp_4/b4.tmp', true);
        $b1 = Bieumau1::where('user_id', $this->user_id)->where('reporter_year', $this->reporter_year)->first();
        $file = str_replace('@receiver@', $b1->receiverTmp(), $file);
        $file = str_replace('@reporter_element_name@', $b1->reporter_element_name, $file);
        $file = str_replace('@year@', $this->reporter_year, $file);
        $file = str_replace('@f1@', Bieumau4::ftmp($this->total), $file);
        $file = str_replace('@f2@', Bieumau4::ftmp($this->subject_lv1), $file);
        $file = str_replace('@f3@', Bieumau4::ftmp($this->subject_lv2), $file);
        $file = str_replace('@f4@', Bieumau4::ftmp($this->subject_lv3), $file);
        $file = str_replace('@f5@', Bieumau4::ftmp($this->subject_lv4), $file);
        $file = str_replace('@f6@', Bieumau4::ftmp($this->subject_lv5), $file);
        $file = str_replace('@f7@', Bieumau4::ftmp($this->subject_lab_1), $file);
        $file = str_replace('@f8@', Bieumau4::ftmp($this->subject_lab_2), $file);
        $file = str_replace('@f9@', Bieumau4::ftmp($this->subject_lab_3), $file);
        $file = str_replace('@f10@', Bieumau4::ftmp($this->subject_lab_4), $file);
        $file = str_replace('@f11@', Bieumau4::ftmp($this->subject_lab_5), $file);
        $file = str_replace('@f12@', Bieumau4::ftmp($this->subject_lab_6), $file);
        $file = str_replace('@f13@', Bieumau4::ftmp($this->subject_money_1, 2), $file);
        $file = str_replace('@f14@', Bieumau4::ftmp($this->subject_money_2, 2), $file);
        $file = str_replace('@f15@', Bieumau4::ftmp($this->subject_money_3, 2), $file);
        $file = str_replace('@f16@', Bieumau4::ftmp($this->subject_money_4, 2), $file);
        $file = str_replace('@f17@', Bieumau4::ftmp($this->subject_money_5, 2), $file);
        $file = str_replace('@f18@', Bieumau4::ftmp($this->subject_money_6, 2), $file);
        $file = str_replace('@f19@', Bieumau4::ftmp($this->subject_money_7, 2), $file);
        $file = str_replace('@f20@', Bieumau4::ftmp($this->total_job), $file);
        $file = str_replace('@f21@', Bieumau4::ftmp($this->total_job_1), $file);
        $file = str_replace('@f22@', Bieumau4::ftmp($this->total_job_2), $file);
        $file = str_replace('@f23@', Bieumau4::ftmp($this->total_job_3), $file);
        $file = str_replace('@f24@', Bieumau4::ftmp($this->total_job_4), $file);
        $file = str_replace('@f25@', Bieumau4::ftmp($this->total_job_5), $file);
        $file = str_replace('@f26@', Bieumau4::ftmp($this->total_lab_1), $file);
        $file = str_replace('@f27@', Bieumau4::ftmp($this->total_lab_2), $file);
        $file = str_replace('@f28@', Bieumau4::ftmp($this->total_lab_3), $file);
        $file = str_replace('@f29@', Bieumau4::ftmp($this->total_lab_4), $file);
        $file = str_replace('@f30@', Bieumau4::ftmp($this->total_lab_5), $file);
        $file = str_replace('@f31@', Bieumau4::ftmp($this->total_lab_6), $file);
        $file = str_replace('@f32@', Bieumau4::ftmp($this->total_money_1, 2), $file);
        $file = str_replace('@f33@', Bieumau4::ftmp($this->total_money_2, 2), $file);
        $file = str_replace('@f34@', Bieumau4::ftmp($this->total_money_3, 2), $file);
        $file = str_replace('@f35@', Bieumau4::ftmp($this->total_money_4, 2), $file);
        $file = str_replace('@f36@', Bieumau4::ftmp($this->total_money_5, 2), $file);
        $file = str_replace('@f37@', Bieumau4::ftmp($this->total_money_6, 2), $file);
        $file = str_replace('@f38@', Bieumau4::ftmp($this->total_money_7, 2), $file);
        
        return $file;
    }

    public function generateBieuX(){
        $file = file_get_contents('tmp/temp_4/b4print.tmp', true);
        $b1 = Bieumau1::where('user_id', $this->user_id)->where('reporter_year', $this->reporter_year)->first();
        $file = str_replace('@receiver@', $b1->receiverTmp(), $file);
        $file = str_replace('@reporter_element_name@', $b1->reporter_element_name, $file);
        $file = str_replace('@year@', $this->reporter_year, $file);
        $file = str_replace('@f1@', Bieumau4::ftmp($this->total), $file);
        $file = str_replace('@f2@', Bieumau4::ftmp($this->subject_lv1), $file);
        $file = str_replace('@f3@', Bieumau4::ftmp($this->subject_lv2), $file);
        $file = str_replace('@f4@', Bieumau4::ftmp($this->subject_lv3), $file);
        $file = str_replace('@f5@', Bieumau4::ftmp($this->subject_lv4), $file);
        $file = str_replace('@f6@', Bieumau4::ftmp($this->subject_lv5), $file);
        $file = str_replace('@f7@', Bieumau4::ftmp($this->subject_lab_1), $file);
        $file = str_replace('@f8@', Bieumau4::ftmp($this->subject_lab_2), $file);
        $file = str_replace('@f9@', Bieumau4::ftmp($this->subject_lab_3), $file);
        $file = str_replace('@f10@', Bieumau4::ftmp($this->subject_lab_4), $file);
        $file = str_replace('@f11@', Bieumau4::ftmp($this->subject_lab_5), $file);
        $file = str_replace('@f12@', Bieumau4::ftmp($this->subject_lab_6), $file);
        $file = str_replace('@f13@', Bieumau4::ftmp($this->subject_money_1, 2), $file);
        $file = str_replace('@f14@', Bieumau4::ftmp($this->subject_money_2, 2), $file);
        $file = str_replace('@f15@', Bieumau4::ftmp($this->subject_money_3, 2), $file);
        $file = str_replace('@f16@', Bieumau4::ftmp($this->subject_money_4, 2), $file);
        $file = str_replace('@f17@', Bieumau4::ftmp($this->subject_money_5, 2), $file);
        $file = str_replace('@f18@', Bieumau4::ftmp($this->subject_money_6, 2), $file);
        $file = str_replace('@f19@', Bieumau4::ftmp($this->subject_money_7, 2), $file);
        $file = str_replace('@f20@', Bieumau4::ftmp($this->total_job), $file);
        $file = str_replace('@f21@', Bieumau4::ftmp($this->total_job_1), $file);
        $file = str_replace('@f22@', Bieumau4::ftmp($this->total_job_2), $file);
        $file = str_replace('@f23@', Bieumau4::ftmp($this->total_job_3), $file);
        $file = str_replace('@f24@', Bieumau4::ftmp($this->total_job_4), $file);
        $file = str_replace('@f25@', Bieumau4::ftmp($this->total_job_5), $file);
        $file = str_replace('@f26@', Bieumau4::ftmp($this->total_lab_1), $file);
        $file = str_replace('@f27@', Bieumau4::ftmp($this->total_lab_2), $file);
        $file = str_replace('@f28@', Bieumau4::ftmp($this->total_lab_3), $file);
        $file = str_replace('@f29@', Bieumau4::ftmp($this->total_lab_4), $file);
        $file = str_replace('@f30@', Bieumau4::ftmp($this->total_lab_5), $file);
        $file = str_replace('@f31@', Bieumau4::ftmp($this->total_lab_6), $file);
        $file = str_replace('@f32@', Bieumau4::ftmp($this->total_money_1, 2), $file);
        $file = str_replace('@f33@', Bieumau4::ftmp($this->total_money_2, 2), $file);
        $file = str_replace('@f34@', Bieumau4::ftmp($this->total_money_3, 2), $file);
        $file = str_replace('@f35@', Bieumau4::ftmp($this->total_money_4, 2), $file);
        $file = str_replace('@f36@', Bieumau4::ftmp($this->total_money_5, 2), $file);
        $file = str_replace('@f37@', Bieumau4::ftmp($this->total_money_6, 2), $file);
        $file = str_replace('@f38@', Bieumau4::ftmp($this->total_money_7, 2), $file);
        
        return $file;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
