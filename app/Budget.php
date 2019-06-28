<?php

namespace App;
use App\paymentAndIncomeType;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    
    protected $fillable=[
        'budget_category_id', 'user_id', 'name', 'total_amount', 'budget_type_id','start_date', 'end_date',
        'payment_day', 'payment_month', 'total_paid', 'opened_payment', 'completed_payment', 'payment_interval',
        'number_of_months', 'interval_amount'
    ];


  

/*      protected $attributes = [
       'user_id' => $this->setUserIdAttribute($value),
    ];*/

    public function budgetCategory()
    {
    	return $this->belongsTo(BudgetCategory::class);
    }

    public function payments()
    {
    	return $this->hasMany(Payment::class);
    }


       public function addPayment($payment){
       $this->payments()->create($payment);
   }


public function setUserIdAttribute($value)
{
    $this->attributes['user_id'] = $value;
}


public function budgetType()
{
  return $this->belongsTo(PaymentAndIncomeType::class, 'budget_type_id', 'id');
}


public function sumTotalAmount()
{
  
}
}
