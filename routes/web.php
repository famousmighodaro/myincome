<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$title=['Welcome'];
    return view('welcome');
});



Route::get('/admin', function(){
	

	return view('admin.index');
});



Route::get('admin/categories', 'BudgetCategoryController@index');

Route::post('admin/category', 'BudgetCategoryController@store');

Route::get('/admin/category/{budgetCategory}', 'BudgetCategoryController@show');

Route::get('/admin/category/{budgetCategory}/edit', 'BudgetCategoryController@edit');
Route::patch('/admin/category/{budgetCategory}', 'BudgetCategoryController@update');
Route::delete('/admin/category/{budgetCategory}/destroy', 'BudgetCategoryController@destroy');

Route::get('/admin/budgets', 'BudgetController@index');
Route::post('/categories/{budgetCategory}/budget', 'BudgetController@store');
Route::post('/budget', 'BudgetController@store');
Route::get('admin/categories/{budgetCategory}/budgets/{budget}/edit', 'BudgetController@edit');
Route::patch('budgets/{budget}', 'BudgetController@updatePaymentCompleted');
Route::patch('admin/category/{budgetCategory}/budget/{budget}', 'BudgetController@update');
Route::get('admin/category/{budgetCategory}/budget/{budget}', 'BudgetController@show');


Route::post('/budget/{budget}/payment', 'PaymentController@store');


Route::get('/admin/incomes', 'IncomeController@index');
Route::post('/admin/income', 'IncomeController@store');
Route::get('/admin/income/{income}/edit', 'IncomeController@edit');
Route::patch('/admin/income/{income}', 'IncomeController@update');
Route::delete('admin/income/{income}', 'IncomeController@destroy');


Route::get('/admin/savings', 'SavingController@index');
Route::post('/admin/saving', 'SavingController@store');

//Route::get('/admin/panel', 'Controller@index');