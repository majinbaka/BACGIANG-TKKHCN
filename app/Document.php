<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	protected $table = "documents";
    
    protected $fillable = [
        'code','publisher','url','description','signer','publish_day','category',
    ];
}
