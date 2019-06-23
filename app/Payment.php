<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    
    protected $fillable=[
    	'added_amount'
    ];
    public function budget()
    {
    	return $this->belongsTo(Budget::class);
    }
}
