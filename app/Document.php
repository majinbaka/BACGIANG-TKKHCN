<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	protected $table = "documents";
    
    protected $fillable = [
        'code','publisher','url','description','signer','publish_day','category',
    ];

    public function documentExists()
	{
        if (file_exists( public_path() . '/uploads/'.$this->url)) {
            return true;
        } else {
            return false;
        }   
	}
}
