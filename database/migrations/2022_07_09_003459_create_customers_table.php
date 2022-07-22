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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->string('document',20);
            $table->string('email',45);
            $table->string('postal_code',15);
            $table->string('address',100);
            $table->unsignedDouble('number');
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('uf_id');
            $table->timestamps();

            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('uf_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
