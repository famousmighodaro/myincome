<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected  $fillable=[
    	'name', 'amount', 'income_type', 'start_date', 'end_date', 'received_day', 'received_month'

    ];

    public function incomeType()
    {
        return $this->belongsTo(PaymentAndIncomeType::class, 'income_type', 'id');
    }



    public function receivedMonth()
    {
        return $this->belongsTo(MonthOfTheYear::class, 'received_month', 'id');
    }

}
