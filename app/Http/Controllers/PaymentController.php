<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budget;
use App\Payment;
class PaymentController extends Controller
{
    
	public function store(Budget $budget, Payment $payment, Request $request)
	{
		$rules=[
					'added_amount'=>'numeric|required'

		];


        $validatedAttributes = request()->validate($rules);
      
        $budget->addPayment($validatedAttributes);
        return back();
	}
  
}
