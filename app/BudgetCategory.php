<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetCategory extends Model
{
   protected $fillable=['name'];


   protected $guarded=[];


   public function budgets(){
       return $this->hasMany(Budget::class);
   }


   public function addBudget($budget){
       $this->budgets()->create($budget);
   }


      public function updateBudget($budget){
       $this->budgets()->update($budget);
   }
}
