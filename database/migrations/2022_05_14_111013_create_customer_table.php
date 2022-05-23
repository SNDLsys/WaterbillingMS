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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('cusId');
            $table->timestamps();
            $table->string('cusLastname');
            $table->string('cusFirstname');
            $table->string('cusMiddlename');
            $table->string('contact');
            $table->string('address');
            $table->string('connection_status');
        });

        /*Schema::create('addingbill', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('meter_num');
            $table->string('period_from');
            $table->string('period_to');
            $table->string('prev_reading');
            $table->string('present_reading');
            $table->string('bill_amount');
            $table->string('bill_date');
            $table->string('due');
            $table->string('penalty');

        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
};
