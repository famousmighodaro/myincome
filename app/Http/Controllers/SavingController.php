<?php

namespace App\Http\Controllers;

use App\Saving;
use App\BudgetCategory;
use App\paymentAndIncomeType;
use App\MonthOfTheYear;
use App\DaysOfTheMonth;

use Illuminate\Http\Request;

class SavingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saving = new Saving;
        $months = MonthOfTheYear::all();
        $days=DaysOfTheMonth::all();
        $savingTypes= PaymentAndIncomeType::all();
        $categories = BudgetCategory::all();
        $savings = Saving::all();
        return view('/admin.savings.index', compact('saving', 'savings', 'months', 'days', 'savingTypes', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saving =new Saving;
        if($request->has('saving_type')=='1')
        {
            $request->request->add(['total_amount_saved'=>request('amount')]);
            //$saving->total_amount_saved=>$request('amount');
        }

$request->request->add(['total_amount_saved'=>request('amount')]);
        $rules =[
            'category_id'=>'required|numeric|max:10',
            'name'=>'required|string|min:3 ', 
            'amount'=>'numeric',
            'saving_type'=>'string',
            'total_amount_saved'=>'required|numeric',
            'payment_month'=>'required_if:saving_type_id,5|sometimes|nullable|alpha_num',
            'payment_day'=>'required_if:saving_type_id,2,3,4,5|sometimes|nullable|alpha_num',
            'saving_target_amount'=>'required_if:saving_type_id,2,3,4,5|numeric',
            'interval_saving_amount'=>'required_if:saving_type_id,2,3,4,5|sometimes|nullable|numeric',            
            'start_date'=>'nullable|required_if:saving_type_id,2,3,4,5|date',
            'end_date'=>'nullable|required_if:saving_type_id,2,3,4,5|date',
        ];


        $validatedAttributes = request()->validate($rules);

       dd( $saving->create($validatedAttributes));
        return redirect('/admin/savings');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function show(saving $saving)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function edit(saving $saving)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, saving $saving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function destroy(saving $saving)
    {
        //
    }
}
