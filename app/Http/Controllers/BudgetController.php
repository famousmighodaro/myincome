<?php

namespace App\Http\Controllers;

use App\Budget;
use Illuminate\Http\Request;
use App\BudgetCategory;
use App\Payment;
use App\PaymentAndIncomeType;
use App\MonthOfTheYear;
use App\DaysOfTheMonth;
class BudgetController extends Controller
{
 

    public function index()
    {
        $budgets = Budget::all();
        $budgetCategories=BudgetCategory::all();
        $budgetTypes = PaymentAndIncomeType::all();
        $months=MonthOfTheYear::all();
        $days=DaysOfTheMonth::all();
        return view('/admin/categories/budgets/index', compact('budgets', 'budgetCategories', 'budgetTypes', 'days', 'months'));
    }


    public function store(BudgetCategory $budgetCategory, Budget $budget, Request $request)

    {
        $budgets = new Budget;
         if ( request()->has('budget_category_id')) {
          // dd(\Request::getRequestUri()) 
         
       }

       if (request()->has('paid')) {
           $request->request->add(['total_paid'=>request('total_amount')]);
           $request->request->add(['completed_payment'=>1]);
       }else {
             $request->request->add(['opened_payment'=>request('total_amount')]);
       }

         if(\Request::getRequestUri()=='/budget'){
           $budgetCategory->id=request('budget_category_id');
         }

       // $budgetCategory->id=$request->('budget_category_id');
       
        $random = rand(100, 1);
        $budgets->user_id=$random;
        
         $request->request->add(['user_id'=>$random]);
       
   
       $rules =[
           'budget_category_id'=>'numeric',
            'name'=>'required|string|min:3 ', 
            'total_paid'=>'numeric',
            'user_id'=>'numeric',
            'completed_payment'=>'numeric',
            'opened_payment'=>'numeric',
            'total_amount'=>'required|numeric',
            'payment_month'=>'required_if:budget_type_id,5|sometimes|nullable|alpha_num',
            'payment_day'=>'required_if:budget_type_id,2,3,4,5|sometimes|nullable|alpha_num',
            'budget_type_id'=>'required|alpha_num|min:1|max:10',
            'interval_amount'=>'sometimes|nullable|numeric',            
            'start_date'=>'nullable|required_if:budget_type_id,2,3,4,5|date',
            'end_date'=>'nullable|required_if:budget_type_id,2,3,4,5|date',
       ];

        $validatedAttributes = request()->validate($rules);
       
        $budgetCategory->addBudget($validatedAttributes);
        return back()->with('message', "Thanks, your quote request has been sent");
    }

   

    public function show(BudgetCategory $budgetCategory, Budget $budget, Payment $payments)
   
    {
         $count=1;
        return view('/admin.categories.budgets.show', compact('budget', 'budgetCategory', 'payments', 'count'));
    }



    public function edit(BudgetCategory $budgetCategory, Budget $budget)
    {
        $budgetCategories =BudgetCategory::all();
        $budgetTypes = PaymentAndIncomeType::all();
        $months=MonthOfTheYear::all();
        $days=DaysOfTheMonth::all();


        return view('/admin.categories.budgets.edit', compact('budget', 'budgetCategory', 'budgetCategories', 'budgetTypes', 'days', 'months'));
    }



    public function update(BudgetCategory $budgetCategory, Budget $budget)
    {
     


         if (request()->has('recurring')) {
           request()->merge([
                'recurring'=>true,
           ]);
            

       }
       $rules =[
            'name'=>'required|string|min:3', 
            'total_amount'=>'required|numeric',
            'budget_category_id'=>'required|string',
            'recurring'=>'sometimes|boolean',
            'payment_interval'=>'required_if:budget_type_id,5|nullable|string|max:10',
            'interval_amount'=>'sometimes|nullable|numeric',            
            'start_date'=>'nullable|required_if:budget_type_id,2,3,4,5|date',
            'end_date'=>'nullable|required_if:budget_type_id,2,3,4,5|date',
       ];

       $validatedAttributes = request()->validate($rules);

       $budget->update($validatedAttributes);
        return redirect('/admin/category/'.$budgetCategory->id);
    }

    public function updatePaymentCompleted(Request $request, Budget $budget)
    {
        $budget->update([
            'completed_payment'=>request()->has('completed_payment')
        ]);
        return back();
    }

   
    public function destroy(Budget $budget)
    {
        foreach ($variable as $key => $value) {
            # code...
        }
    }
}
