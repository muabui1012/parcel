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
        Schema::create('parcel', function (Blueprint $table) {
            $table->id();
            // $table->integer('officeID')->default(0);
            $table->string('code')->nullable();
            $table->string('senderName')->nullable();
            $table->string('senderPhone')->nullable();
            $table->string('senderAddress')->nullable();
            $table->string('sendOfficeID')->nullable();
            $table->string('receiverName')->nullable();
            $table->string('receiverPhone')->nullable();
            $table->string('receiverAddress')->nullable();
            $table->string('receivOfficeID')->nullable();
            $table->string('trace')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('parcel');
    }
};
