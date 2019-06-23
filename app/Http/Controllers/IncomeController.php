<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;
use App\MonthOfTheYear;
use App\paymentAndIncomeType;
use App\DaysOfTheMonth;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $months = MonthOfTheYear::all();
        $incomeTypes =PaymentAndIncomeType::all();
        $days=DaysOfTheMonth::all();
        $income = new Income;
        $incomes =Income::orderBy('created_at','asc')->get(); 
        return view('/admin.incomes.index', compact('income','incomes', 'months', 'incomeTypes', 'days'));
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
    public function store(Request $request, Income $income)
    {
        $rules=[
            'name'=>'required|string',
            'amount'=>'required|numeric',
            'income_type'=>'required|string',
            'start_date'=>'sometimes|nullable|required_if:income_type,==,true|date',
            'end_date'=>'required_if:income_type,==,""|sometimes|nullable|date',
            'received_month'=>'required_if:income_type,!=,""|sometimes|nullable|string',
            'received_day'=>'required_if:income_type,!=,""|sometimes|nullable|numeric'
        ];

        $validatedAttributes =request()->validate($rules);
        Income::create($validatedAttributes);
        return redirect('/admin/incomes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(income $income)
    {

        $months = MonthOfTheYear::all();
        $incomeTypes =PaymentAndIncomeType::all();
        $days=DaysOfTheMonth::all();
        return view('/admin.incomes.edit', compact('income', 'months', 'incomeTypes', 'days'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
                $rules=[
            'name'=>'required|string',
            'amount'=>'required|numeric',
            'income_type'=>'required|string',
            'start_date'=>'sometimes|nullable|required_if:income_type,==,true|date',
            'end_date'=>'required_if:income_type,==,""|sometimes|nullable|date',
            'received_month'=>'required_if:income_type,!=,""|sometimes|nullable|string',
            'received_day'=>'required_if:income_type,!=,""|sometimes|nullable|numeric'
        ];

        $validatedAttributes =request()->validate($rules);
        $income->update($validatedAttributes);
        return redirect('/admin/incomes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(income $income)
    {
        $income->delete();
        return redirect('/admin/incomes');
    }
}
