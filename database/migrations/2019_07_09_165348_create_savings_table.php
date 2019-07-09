<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savings', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('category_id');
            $table->string('name');
            $table->decimal('amount');
            $table->decimal('total_amount_saved');
            $table->boolean('saving_type');
            $table->decimal('saving_target_amount')->default(NULL);
            $table->decimal('interval_saving_amount')->default(NULL);
            $table->date('start_date')->default(NULL);
            $table->date('end_date')->default(NULL);
            $table->unsignedInteger('payment_month')->default(0);
            $table->unsignedInteger('payment_day')->default(0);
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
        Schema::dropIfExists('savings');
    }
}
