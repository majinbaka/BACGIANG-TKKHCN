<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Technology;
use App\Element;

class Bieumau1 extends Model
{
	protected $table = "bieumau1";
    
    protected $fillable = [
        'user_id',
    	'name',
        'publish_day',
        'reporter',
        'receiver',
        'reporter_year',
        'reporter_element_name',
        'reporter_transfer_name',
        'reporter_eng_name',
        'address',
        'city',
        'phone',
        'email',
        'fax',
        'website',
        'establish_code',
        'establish_day',
        'establish_lever',
        'tax_number',
        'certificate_number',
        'certificate_date',
        'certificate_grant',
        'manager',
        'manager_city',
        'type_company',
        'type_econom',
        'money',
        'lab_number',
        'lab_range',
        'lab_description',
        'report_info',
    ];

    public function labNumber($n){
        $ln = explode(',', $this->lab_number);
        return in_array($n, $ln);
    }

    public function receiverHAS($n){
        $ln = explode(',', $this->receiver);
        return in_array($n, $ln);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function detachTechnologies()
    {
        foreach ($this->technologies as $t) {
            $t->delete();
        }
        return;
    }

    public function detachElements()
    {
        foreach ($this->elements as $t) {
            $t->delete();
        }
        return;
    }

    public function technologies()
    {
        return $this->hasMany('App\Technology');
    }

    public function elements()
    {
        return $this->hasMany('App\Element');
    }
}
