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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('number');
            $table->unsignedInteger('user_id');
            $table->date('date');
            $table->string('type',1);
            $table->string('status',1);
            $table->unsignedInteger('customers_id');
            $table->string('observation',200)->nullable();
            $table->unsignedInteger('type_payments_id');

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('customers_id')->references('id')->on('customers');
            $table->foreign('type_payments_id')->references('id')->on('type_payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
