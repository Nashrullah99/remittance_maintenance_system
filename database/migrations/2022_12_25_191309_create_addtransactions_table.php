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
        Schema::create('addtransactions', function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->string('method');
            $table->string('receivedBy');
            $table->string('relationship')->nullable();
            $table->string('fk');
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
        Schema::dropIfExists('addtransactions');
    }
};
