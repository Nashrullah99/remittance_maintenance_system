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
        Schema::create('addmembers', function (Blueprint $table) {
            $table->id();
            $table->string('remiNo')->unique();
            $table->string('bankName');
            $table->string('branchName');
            $table->string('remitterCountry');
            $table->string('remitterName');
            $table->string('receiverName');
            $table->string('receiverNumber');
            $table->string('receiverEmail');
            $table->string('receiverIdType');
            $table->string('receiverId');
            $table->string('receiverAdd');
            $table->string('receiverrela');
            $table->string('method');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('addmembers');
    }
};
