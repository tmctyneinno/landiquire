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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('partner_id')->nullable();
            $table->string('payment_ref')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('project_id')->unsigned();
            $table->foreignId('investment_id')->nullable();
            $table->double('amount')->nullable();
            $table->double('prev_balance')->nullable();
            $table->double('avail_balance')->nullable();
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
        Schema::dropIfExists('transactions');
    }
};
