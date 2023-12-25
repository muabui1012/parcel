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
        Schema::create('warehouse', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->integer('managerid')->nullable();
            $table->string('staffList')->nullable()->default("");
            $table->integer('officeid')->nullable();
            //$table->string('parceList')->nullable();
            $table->string('incomingFromOffice')->nullable();
            $table->string('incomingFromOtherWarehouse')->nullable();
            $table->string('outgoingToIOtherWarehouse')->nullable();
            $table->string('outgoingToCustomer')->nullable();
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
        Schema::dropIfExists('warehouse');
    }
};
