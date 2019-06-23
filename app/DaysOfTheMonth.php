<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaysOfTheMonth extends Model
{
    
    public function incomes()
    {
    	return $this->hasMany(Income::class);
    }
}
