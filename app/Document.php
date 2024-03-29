<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	protected $table = "documents";
    
    protected $fillable = [
        'code','publisher','url','description','signer','publish_day','category_id',
    ];

    public function documentExists()
	{
        if ($this->url !="") {
            return true;
        } else {
            return false;
        }   
	}
}
