<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_bills', function (Blueprint $table) {
            $table->id('addBillsId');
            $table->timestamps();
            $table->string('period_from');
            $table->string('period_to');
            $table->string('prev_reading');
            $table->string('present_reading');
            $table->string('bill_amount');
            $table->string('bill_date');
            $table->string('due');
            $table->string('status');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_bills');
    }
};
