<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BudgetCategory;
use App\PaymentAndIncomeType;
use App\MonthOfTheYear;
use App\DaysOfTheMonth;

class BudgetCategoryController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgetCategories= BudgetCategory::all();
        $count=1;
        return view('/admin.categories.index', compact('budgetCategories', 'count'));
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
        $validateAtrribute=request()->validate([
            'name'=>['required', 'min:3'],
        ]);

        BudgetCategory::create($validateAtrribute);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BudgetCategory $budgetCategory)
    {
        $budgetTypes = PaymentAndIncomeType::all();
        $months=MonthOfTheYear::all();
        $days=DaysOfTheMonth::all();
        return view('/admin/categories.show', compact('budgetCategory', 'budgetTypes', 'days', 'months'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BudgetCategory $budgetCategory)
    {
        return view('/admin.categories.edit', compact('budgetCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BudgetCategory $budgetCategory)
    {
            request()->validate([
                'name'=>['required', 'min:3'],
            ]);

            $budgetCategory->update(request(['name']));
            return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BudgetCategory $budgetCategory)
    {
        $budgetCategory->delete();
        return redirect('/admin/categories');
    }
}
