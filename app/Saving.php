<?php

namespace App;
use App\BudgetCategory;
use App\paymentAndIncomeType;



use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    protected $fillable=[
        'name', 'amount', 'saving_type', 'start_date', 'end_date', 'payment_month', 'payment_day', 'interval_saving_amount', 'saving_target_amount', 'category_id', 'total_amount_saved', 
    ];


    public function category()
    {
    	return $this->belongsTo(BudgetCategory::class, 'saving_catgory', 'id' );
    }

    public function savingType()
    {
    	return $this->belongsTo(PaymentAndIncomeType::class, 'payment_type', 'id');
    }



}