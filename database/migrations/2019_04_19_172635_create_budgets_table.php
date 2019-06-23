<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('budget_category_id')->default(0);
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->integer('total_amount');
            $table->string('budget_type');
            $table->decimal('interval_payment')->default(0);
            $table->integer('total_paid')->default(0);
            $table->integer('opened_payment')->default(0);
            $table->boolean('completed_payment')->default(false);
            $table->smallInteger('payment_month')->default(null);
            $table->smallInteger('payment_day')->default(null);
            $table->date('start_date')->default(null);
            $table->date('end_date')->default(null);
            $table->unsignedInteger('number_of_months')->default(null);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}
