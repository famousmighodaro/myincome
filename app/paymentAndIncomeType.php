<?php

namespace App;
use App\Budget;

use Illuminate\Database\Eloquent\Model;

class paymentAndIncomeType extends Model
{
    

	public function budgets()
	{
		return $this->hasMany(Budget::class);
	}

	public function incomes()
	{
		return $this->hasMany(Income::class);
	}
}
