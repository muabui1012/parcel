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
        Schema::create('office', function (Blueprint $table) {
            $table->id();
            $table->string('managerid')->nullable();
            $table->string('parceList')->nullable();
            $table->string('incomingFromOffice')->nullable();
            $table->string('incomingFromWarehouse')->nullable();
            $table->string('outgoingToWarehouse')->nullable();
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
        Schema::dropIfExists('office');
    }
};
