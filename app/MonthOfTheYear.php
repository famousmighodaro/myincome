<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthOfTheYear extends Model
{
       public function incomes()
    {
    	return $this->hasMany(Income::class);
    }
}
